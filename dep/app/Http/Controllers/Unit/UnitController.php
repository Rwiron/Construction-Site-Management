<?php

namespace App\Http\Controllers\Unit;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Log;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::all();
        return view('unit.index', compact('units'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:Available,Occupied,Maintenance',
        ]);

        try {
            Unit::create($request->all());
            Toastr::success('Unit added successfully.');
        } catch (\Exception $e) {
            Log::error('Error adding unit', ['message' => $e->getMessage()]);
            Toastr::error('Failed to add unit. Please try again.');
        }

        return redirect()->route('unit.index');
    }

    public function edit($id)
    {
        $unit = Unit::findOrFail($id);
        return response()->json(['unit' => $unit]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:Available,Occupied,Maintenance',
        ]);

        try {
            $unit = Unit::findOrFail($id);
            $unit->update($request->all());
            Toastr::success('Unit updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error updating unit', ['message' => $e->getMessage()]);
            Toastr::error('Failed to update unit. Please try again.');
        }

        return redirect()->route('unit.index');
    }

    public function destroy($id)
    {
        try {
            $unit = Unit::findOrFail($id);
            $unit->delete();
            Toastr::success('Unit deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting unit', ['message' => $e->getMessage()]);
            Toastr::error('Failed to delete unit. Please try again.');
        }

        return redirect()->route('unit.index');
    }
}
