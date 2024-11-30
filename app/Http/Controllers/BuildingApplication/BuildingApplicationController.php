<?php

namespace App\Http\Controllers\BuildingApplication;

use App\Http\Controllers\Controller;
use App\Models\BuildingApplicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Brian2694\Toastr\Facades\Toastr;

class BuildingApplicationController extends Controller
{
    /**
     * Display a listing of building applicants.
     */
    public function index()
    {
        // Fetch all applications with their user info
        $applications = BuildingApplicant::with('user')->get();

        // Pass data to the view
        return view('building_application.index', compact('applications'));
    }

    /**
     * Show the form for creating a new application.
     */
    public function create()
    {
        return view('building_application.create');
    }

    /**
     * Store a newly created application in storage.
     */

    public function store(Request $request)
    {
        try {
            // Validate the input
            $validatedData = $request->validate([
                'phone' => 'required|string|max:15',
                'address' => 'required|string|max:255',
                'documents' => 'nullable|array',
                //'documents.*' => 'file|mimes:pdf,jpg,jpeg,png|max:2048',
                'documents.*' => 'file|mimes:pdf|max:2048',
            ]);

            // Add the logged-in user's ID and set the default status
            $validatedData['user_id'] = Auth::id();
            $validatedData['status'] = 'Submitted'; // Matches the default value in your schema

            // Save the application
            $application = BuildingApplicant::create($validatedData);

            // Handle document uploads if any
            if ($request->hasFile('documents')) {
                $documentPaths = [];
                foreach ($request->file('documents') as $file) {
                    $path = $file->store('building_applications'); // Store the file
                    $documentPaths[] = $path;
                }
                $application->update(['documents' => json_encode($documentPaths)]);
            }

            Toastr::success('Application submitted successfully.', 'Success');
            return redirect()->route('building_application.index');
        } catch (\Exception $e) {
            Log::error('Error creating building application:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            Toastr::error('An error occurred while submitting the application.', 'Error');
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing an existing application.
     */
    public function edit(BuildingApplicant $application)
    {
        return view('building_application.edit', compact('application'));
    }

    /**
     * Update an existing application.
     */
    public function update(Request $request, BuildingApplicant $application)
    {
        try {
            Log::info('Update request received:', $request->all());

            // Validate input
            $validatedData = $request->validate([
                //'status' => 'required|in:Submitted,Under Review,Approved,Rejected',
                'address' => 'nullable|string|max:255',
                'phone' => 'required|string|max:15',
            ]);

            Log::info('Validated data for update:', $validatedData);

            // Update the application
            $application->update($validatedData);

            Log::info('Application updated successfully:', $application->toArray());

            Toastr::success('Application updated successfully.', 'Success');
            return redirect()->route('building_application.index');
        } catch (\Exception $e) {
            Log::error('Error updating application:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            Toastr::error('An error occurred while updating the application.', 'Error');
            return redirect()->back();
        }
    }




    /**
     * Delete an application.
     */
    // public function destroy(BuildingApplicant $application)
    // {
    //     // Delete the application
    //     $application->delete();

    //     // Redirect with success message
    //     return redirect()->route('building_application.index')->with('success', 'Application deleted successfully.');
    // }
    public function destroy(BuildingApplicant $application)
    {
        try {
            // Log the deletion attempt
            Log::info('Deleting application:', ['application_id' => $application->id]);

            // Delete the application
            $application->delete();

            Toastr::success('Application deleted successfully.', 'Success');
            return redirect()->route('building_application.index');
        } catch (\Exception $e) {
            Log::error('Error deleting application:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            Toastr::error('An error occurred while deleting the application.', 'Error');
            return redirect()->back();
        }
    }
}
