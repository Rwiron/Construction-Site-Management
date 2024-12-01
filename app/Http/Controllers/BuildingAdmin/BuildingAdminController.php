<?php

namespace App\Http\Controllers\BuildingAdmin;

use App\Http\Controllers\Controller;
use App\Models\BuildingApplicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class BuildingAdminController extends Controller
{
    /**
     * Display all building applications for the admin.
     */
    public function index()
    {
        try {
            // Fetch all applications with user details
            $applications = BuildingApplicant::with('user')->get();

            // Pass the data to the admin dashboard
            return view('admin.dashboard', compact('applications'));
        } catch (\Exception $e) {
            Log::error('Error fetching applications for admin:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()->with('error', 'An error occurred while fetching applications.');
        }
    }

    /**
     * Update the status of an application (approve/reject).
     */
    public function updateStatus(Request $request, $id)
    {
        try {
            // Validate the status
            $validatedData = $request->validate([
                'status' => 'required|in:Submitted,Under Review,Approved,Rejected',
            ]);

            // Find the application and update the status
            $application = BuildingApplicant::findOrFail($id);
            $application->update(['status' => $validatedData['status']]);

            return redirect()->route('admin.dashboard')->with('success', 'Application status updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error updating application status:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()->with('error', 'An error occurred while updating the application status.');
        }
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
