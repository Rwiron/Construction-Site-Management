<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\Position;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class TeamPositionController extends Controller
{
    /**
     * Display the settings view for teams and positions.
     */
    public function index()
    {
        $teams = Team::all();
        $positions = Position::all();
        return view('settings.index', compact('teams', 'positions'));
    }

    /**
     * Store a newly created team in storage.
     */
    public function storeTeam(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:teams',
            'description' => 'nullable|string|max:1000',
        ]);

        Team::create($request->only('name', 'description'));

        Toastr::success('Team created successfully.', 'Success');
        return redirect()->route('settings.index');
    }

    /**
     * Store a newly created position in storage.
     */
    public function storePosition(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:positions',
            'description' => 'nullable|string|max:1000',
        ]);

        Position::create($request->only('name', 'description'));

        Toastr::success('Position created successfully.', 'Success');
        return redirect()->route('settings.index');
    }

    /**
     * Update the specified team in storage.
     */
    public function updateTeam(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:teams,name,' . $team->id,
            'description' => 'nullable|string|max:1000',
        ]);

        $team->update($request->only('name', 'description'));

        Toastr::success('Team updated successfully.', 'Success');
        return redirect()->route('settings.index');
    }

    /**
     * Update the specified position in storage.
     */
    public function updatePosition(Request $request, Position $position)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:positions,name,' . $position->id,
            'description' => 'nullable|string|max:1000',
        ]);

        $position->update($request->only('name', 'description'));

        Toastr::success('Position updated successfully.', 'Success');
        return redirect()->route('settings.index');
    }

    /**
     * Remove the specified team from storage.
     */
    public function destroyTeam(Team $team)
    {
        if ($team->staff()->count() > 0) {
            Toastr::error('Cannot delete a team with assigned staff.', 'Error');
            return redirect()->route('settings.index');
        }

        $team->delete();

        Toastr::success('Team deleted successfully.', 'Success');
        return redirect()->route('settings.index');
    }

    /**
     * Remove the specified position from storage.
     */
    public function destroyPosition(Position $position)
    {
        if ($position->staff()->count() > 0) {
            Toastr::error('Cannot delete a position with assigned staff.', 'Error');
            return redirect()->route('settings.index');
        }

        $position->delete();

        Toastr::success('Position deleted successfully.', 'Success');
        return redirect()->route('settings.index');
    }
}
