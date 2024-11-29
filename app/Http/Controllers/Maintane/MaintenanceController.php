<?php

namespace App\Http\Controllers\Maintane;

use App\Http\Controllers\Controller;
use App\Models\Maintenance;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the maintenance tasks.
     */
    public function index()
    {
        try {
            $maintenances = Maintenance::all(); // Fetch all maintenance tasks
            $users = User::where('role_id', 4)->get(); // Adjust role field as needed

            return view('maintane.index', compact('maintenances', 'users'));
        } catch (\Exception $e) {
            Log::error("Error loading maintenance tasks: " . $e->getMessage());
            Toastr::error('Failed to load maintenance tasks. Please try again.');
            return back();
        }
    }

    /**
     * Store a newly created maintenance task in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'maintenance_type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:Pending,In Progress,Completed',
            'assigned_to' => 'nullable|exists:users,id',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'priority' => 'required|in:Low,Medium,High',
        ]);

        try {
            Maintenance::create($request->all());
            Toastr::success('Maintenance task created successfully.');
            return redirect()->route('maintane.index');
        } catch (\Exception $e) {
            Log::error("Error creating maintenance task: " . $e->getMessage());
            Toastr::error('Failed to create maintenance task. Please try again.');
            return back()->withInput();
        }
    }



    /**
     * Update the specified maintenance task in the database.
     */
    // public function update(Request $request, Maintenance $maintenance)
    // {
    //     // Log the incoming request data
    //     Log::info('Update maintenance request received:', $request->all());

    //     // Validation
    //     $validated = $request->validate([
    //         'maintenance_type' => 'required|string|max:255',
    //         'description' => 'nullable|string',
    //         'status' => 'required|in:Pending,In Progress,Completed',
    //         'assigned_to' => 'nullable|exists:users,id',
    //         'start_date' => 'nullable|date',
    //         'end_date' => 'nullable|date|after_or_equal:start_date',
    //         'priority' => 'required|in:Low,Medium,High',
    //     ]);

    //     try {
    //         // Log the validated data
    //         Log::info('Validated maintenance data:', $validated);

    //         // Update the maintenance record
    //         $maintenance->update($validated);

    //         // Log the successful update
    //         Log::info('Maintenance updated successfully:', $maintenance->toArray());

    //         // Use Toastr for success notification
    //         Toastr::success('Maintenance task updated successfully.');
    //     } catch (\Exception $e) {
    //         // Log the exception
    //         Log::error('Error updating maintenance:', ['error' => $e->getMessage()]);

    //         // Use Toastr for error notification
    //         Toastr::error('Failed to update maintenance task. Please try again.');
    //     }

    //     // Redirect back to the maintenance index
    //     return redirect()->route('maintane.index');
    // }


    public function update(Request $request, $id)
    {
        Log::info('Update Request Received:', $request->all());

        $maintenance = Maintenance::find($id);
        if (!$maintenance) {
            Log::error('Maintenance not found:', ['id' => $id]);
            return redirect()->route('maintane.index')->with('error', 'Maintenance task not found.');
        }

        $validated = $request->validate([
            'maintenance_type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:Pending,In Progress,Completed',
            'assigned_to' => 'nullable|exists:users,id',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'priority' => 'required|in:Low,Medium,High',
        ]);

        Log::info('Validated Maintenance Data:', $validated);

        $maintenance->update($validated);

        Log::info('Updated Maintenance Record:', $maintenance->toArray());

        Toastr::success('Maintenance task updated successfully.');

        return redirect()->route('maintane.index');
    }

    /**
     * Remove the specified maintenance task from the database.
     */
    public function destroy($id)
    {
        $maintenance = Maintenance::find($id);

        if (!$maintenance) {
            Toastr::error('Maintenance task not found.');
            return redirect()->route('maintane.index');
        }

        $maintenance->delete();
        Toastr::success('Maintenance task deleted successfully.');
        return redirect()->route('maintane.index');
    }
}
