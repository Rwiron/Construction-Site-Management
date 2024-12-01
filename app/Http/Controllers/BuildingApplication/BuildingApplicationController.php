<?php

namespace App\Http\Controllers\BuildingApplication;

use App\Http\Controllers\Controller;
use App\Models\BuildingApplicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;

class BuildingApplicationController extends Controller
{
    

    public function index()
    {
        try {
            // Fetch applications belonging to the logged-in user
            $applications = BuildingApplicant::where('user_id', Auth::id())->with('user')->get();

            // Pass data to the view
            return view('building_application.index', compact('applications'));
        } catch (\Exception $e) {
            Log::error('Error fetching applications:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()->with('error', 'An error occurred while fetching your applications.');
        }
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
                'documents.*' => 'file|mimes:pdf|max:2048', // Only allow PDF files
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
                    // Generate a unique name using the original name
                    $originalName = $file->getClientOriginalName();
                    $fileName = time() . '_' . $originalName; // Add a timestamp to avoid conflicts

                    // Store the file and save the path
                    $path = $file->storeAs('building_applications', $fileName);
                    $documentPaths[] = [
                        'path' => $path,
                        'name' => $originalName,
                    ];
                }
                // Save the documents as a JSON-encoded array of objects
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


    // BuildingApplicationController
    public function myRequests()
    {
        $userId = Auth::id(); // Get the logged-in user ID
        $applications = BuildingApplicant::where('user_id', $userId)->get(); // Fetch user's applications

        // Decode the documents field for each application
        foreach ($applications as $application) {
            if ($application->documents) {
                $application->decoded_documents = json_decode($application->documents, true);
            } else {
                $application->decoded_documents = [];
            }
        }

        return view('building_application.my_requests', compact('applications'));
    }

    public function download($file)
    {
        try {
            // Define the path relative to the 'private' disk
            $filePath = "building_applications/{$file}";

            // Log the file path being accessed
            Log::info("Attempting to download file: {$filePath}");

            // Check if the file exists in the 'private' disk
            if (Storage::disk('private')->exists($filePath)) {
                Log::info("File found: {$filePath}");

                // Return the file for download
                return Storage::disk('private')->download($filePath);
            }

            // Log an error if the file doesn't exist
            Log::error("File not found: {$filePath}");
            return redirect()->back()->with('error', 'File not found.');
        } catch (\Exception $e) {
            // Log the exception details
            Log::error("Error downloading file: {$e->getMessage()}", [
                'file' => $file,
                'trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()->with('error', 'An error occurred while downloading the file.');
        }
    }
}
