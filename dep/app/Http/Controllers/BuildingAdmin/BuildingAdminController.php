<?php

namespace App\Http\Controllers\BuildingAdmin;

use App\Http\Controllers\Controller;
use App\Models\BuildingApplicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;
use Mail;

class BuildingAdminController extends Controller
{
    public function index(Request $request)
    {
        try {
            // Fetch the search query if provided
            $query = $request->input('search');

            // Fetch applications based on the search query
            $applications = BuildingApplicant::with('user')
                ->when($query, function ($q) use ($query) {
                    $q->whereHas('user', function ($q) use ($query) {
                        $q->where('name', 'like', '%' . $query . '%')
                            ->orWhere('email', 'like', '%' . $query . '%');
                    });
                })
                ->get();

            $totalApplications = BuildingApplicant::count();
            $approved = BuildingApplicant::where('status', 'approved')->count();
            $underReview = BuildingApplicant::where('status', 'under review')->count();
            $rejected = BuildingApplicant::where('status', 'rejected')->count();
            $submitted = BuildingApplicant::where('status', 'submitted')->count();


            // Pass data to the admin dashboard
            return view('admin.dashboard', compact('applications', 'query', 'totalApplications', 'approved', 'underReview', 'rejected', 'submitted'));
        } catch (\Exception $e) {
            Log::error('Error fetching applications for admin:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()->with('error', 'An error occurred while fetching applications.');
        }
    }



    // public function updateStatus(Request $request, $id)
    // {
    //     try {
    //         // Validate the status
    //         $validatedData = $request->validate([
    //             'status' => 'required|in:Submitted,Under Review,Approved,Rejected',
    //         ]);

    //         // Find the application and update the status
    //         $application = BuildingApplicant::findOrFail($id);
    //         $application->update(['status' => $validatedData['status']]);

    //         // Send email notification
    //         \Mail::to($application->user->email)->send(new \App\Mail\ApplicationStatusUpdated($application));

    //         return redirect()->route('admin.dashboard')->with('success', 'Application status updated successfully and user notified.');
    //     } catch (\Exception $e) {
    //         Log::error('Error updating application status:', [
    //             'message' => $e->getMessage(),
    //             'trace' => $e->getTraceAsString(),
    //         ]);
    //         return redirect()->back()->with('error', 'An error occurred while updating the application status.');
    //     }
    // }


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

            // Send email notification
            \Mail::to($application->user->email)->send(new \App\Mail\ApplicationStatusUpdated($application));

            // Success Toastr Notification
            Toastr::success('Application status updated successfully and user notified!', 'Success');

            return redirect()->route('admin.dashboard');
        } catch (\Exception $e) {
            Log::error('Error updating application status:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            // Error Toastr Notification
            Toastr::error('An error occurred while updating the application status.', 'Error');

            return redirect()->back();
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
