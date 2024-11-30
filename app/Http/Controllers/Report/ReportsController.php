<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Brian2694\Toastr\Facades\Toastr;

class ReportsController extends Controller
{
    /**
     * Display a listing of the reports.
     */
    public function index()
    {
        // Fetch reports and users
        $reports = Report::with('user')->get(); // Assuming `user` relationship is defined in the `Report` model
        $users = User::all(); // Fetch all users

        // Pass data to the view
        return view('report.index', compact('reports', 'users'));
    }

    /**
     * Show the form for creating a new report.
     */
    public function create()
    {
        $users = User::all(); // Fetch users for "generated by" selection
        return view('report.create', compact('users'));
    }

    /**
     * Store a newly created report in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate request
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'user_id' => 'required|exists:users,id',
                'type' => 'required|string',
                'generated_by' => 'required|exists:users,id', // Validate 'generated_by'
            ]);

            // Log the validated data
            Log::info('Report data validated:', $validatedData);

            // Create the report
            $report = Report::create($validatedData);

            // Log success
            Log::info('Report created successfully:', $report->toArray());

            // Toastr success message
            Toastr::success('Report created successfully.', 'Success');

            // Redirect to index
            return redirect()->route('report.index');
        } catch (\Exception $e) {
            // Log the exception
            Log::error('Error creating report:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            // Redirect back with error message
            Toastr::error('An error occurred while creating the report. Please try again.', 'Error');
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified report.
     */
    public function edit(Report $report)
    {
        $users = User::all();
        return view('report.edit', compact('report', 'users'));
    }

    /**
     * Update the specified report in storage.
     */
    public function update(Request $request, Report $report)
    {
        // Validate the input
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|string|max:255',
            'status' => 'required|in:Pending,Completed,Failed',
            'generated_by' => 'required|exists:users,id',
        ]);

        // Update the report
        $report->update($validatedData);

        // Toastr success message
        Toastr::success('Report updated successfully.', 'Success');

        // Redirect back to index
        return redirect()->route('report.index');
    }

    /**
     * Remove the specified report from storage.
     */
    // public function destroy(Report $report)
    // {
    //     $report->delete();

    //     // Toastr success message
    //     Toastr::success('Report deleted successfully.', 'Success');

    //     // Redirect back to index
    //     return redirect()->route('report.index');
    // }


    public function destroy(Report $report)
    {
        try {
            $report->delete();

            // Add Toastr notification for success
            \Brian2694\Toastr\Facades\Toastr::success('Report deleted successfully.', 'Success');

            return redirect()->route('report.index');
        } catch (\Exception $e) {
            \Brian2694\Toastr\Facades\Toastr::error('Failed to delete the report. Please try again.', 'Error');
            return redirect()->route('report.index');
        }
    }
}