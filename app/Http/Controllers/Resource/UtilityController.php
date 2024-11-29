<?php

namespace App\Http\Controllers\Resource;

use App\Http\Controllers\Controller;
use App\Models\Utility;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UtilityController extends Controller
{
    /**
     * Display a listing of the utilities.
     */
    public function index()
    {
        $utilities = Utility::all();
        return view('resource.utilities.index', compact('utilities'));
    }

    /**
     * Store a new utility in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'utility_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:Active,Inactive',
            'cost' => 'nullable|numeric',
            'billing_date' => 'nullable|date',
        ]);

        Utility::create($request->all());
        Toastr::success('Utility added successfully.');
        return redirect()->route('utilities.index');
    }

    /**
     * Update the specified utility in the database.
     */
    public function update(Request $request, Utility $utility)
    {
        $request->validate([
            'utility_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:Active,Inactive',
            'cost' => 'nullable|numeric',
            'billing_date' => 'nullable|date',
        ]);

        $utility->update($request->all());
        Toastr::success('Utility updated successfully.');
        return redirect()->route('utilities.index');
    }

    /**
     * Remove the specified utility from the database.
     */
    public function destroy(Utility $utility)
    {
        $utility->delete();
        Toastr::success('Utility deleted successfully.');
        return redirect()->route('utilities.index');
    }
}
