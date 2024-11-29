<?php

namespace App\Http\Controllers\Staffing;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\Team;
use App\Models\Position;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Log;


class StaffingController extends Controller
{
    /**
     * Display a listing of the staff.
     */
    public function index()
    {
        $staff = Staff::with(['user', 'team', 'position'])->get();
        //$users = User::doesntHave('staff')->get();
        $users = User::where('role_id', 4)->get();
        $teams = Team::all();
        $positions = Position::all();

        return view('staffing.index', compact('staff', 'users', 'teams', 'positions'));
    }

    /**
     * Store a newly created staff member in the database.
     */
    public function store(Request $request)
    {
        try {
            // Validate the request data
            $validated = $request->validate([
                'user_id' => 'required|exists:users,id',
                'team_id' => 'nullable|exists:teams,id',
                'position_id' => 'nullable|exists:positions,id',
                'hire_date' => 'required|date',
                'salary' => 'nullable|numeric',
                'status' => 'required|in:Active,Inactive',
            ]);

            // Save the staff record
            Staff::create($validated);

            // Success notification
            Toastr::success('Staff created successfully.', 'Success');
            return redirect()->route('staffing.index');
        } catch (\Throwable $e) {
            // Log the error
            Log::error('Error saving staff record: ' . $e->getMessage(), [
                'request_data' => $request->all(),
                'stack_trace' => $e->getTraceAsString(),
            ]);

            // Error notification
            Toastr::error('Failed to create staff. Check logs for details.', 'Error');
            return redirect()->back()->withInput();
        }
    }




    /**
     * Update the specified staff member in the database.
     */
    public function update(Request $request, Staff $staff)
    {
        // Validate the request
        $request->validate([
            'team_id' => 'nullable|exists:teams,id',
            'position_id' => 'nullable|exists:positions,id',
            'salary' => 'nullable|numeric|min:0',
            'hire_date' => 'required|date',
            'status' => 'required|in:Active,Inactive',
        ]);

        // Update the staff record
        $staff->update($request->all());

        // Add Toastr success notification
        Toastr::success('Staff member updated successfully.', 'Success');

        // Redirect to the staffing index
        return redirect()->route('staffing.index');
    }

    public function destroy(Staff $staff)
    {
        try {
            $staff->delete();

            Toastr::success('Staff member deleted successfully.', 'Success');
        } catch (\Exception $e) {

            // Log the error for debugging
            Log::error('Error deleting staff: ' . $e->getMessage());

            Toastr::error('An error occurred while deleting the staff member.', 'Error');
        }
        return redirect()->route('staffing.index');
    }
}
