<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Unit;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Log;


class TenantSecController extends Controller
{
    /**
     * Display a listing of tenants.
     */
    public function index()
    {
        $tenants = Tenant::with('unit')->get();
        $units = Unit::all();
        return view('tenant.index', compact('tenants', 'units'));
    }

    /**
     * Store a newly created tenant.
     */

    public function store(Request $request)
    {
        try {
            // Log incoming request data
            Log::info('Incoming tenant data:', $request->all());

            // Validate input
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:tenants,email',
                'phone' => 'required|string|max:15',
                'unit_id' => 'required|exists:units,id',
                'lease_start_date' => 'required|date',
                'lease_end_date' => 'required|date|after_or_equal:lease_start_date',
                'rent_amount' => 'required|numeric|min:0',
            ]);

            // Map fields to match database column names
            $tenantData = [
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'unit_id' => $validatedData['unit_id'],
                'lease_start_date' => $validatedData['lease_start_date'], // Use correct column name
                'lease_end_date' => $validatedData['lease_end_date'], // Use correct column name
                'rent_amount' => $validatedData['rent_amount'],
            ];

            // Create tenant
            $tenant = Tenant::create($tenantData);

            // Log successful creation
            Log::info('Tenant created successfully:', ['tenant' => $tenant]);

            Toastr::success('Tenant added successfully.');

            return redirect()->route('tenant.index');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Log validation errors
            Log::error('Validation errors:', $e->errors());

            Toastr::error('Failed to add tenant. Validation error.');
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Log general errors
            Log::error('Error adding tenant:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            Toastr::error('Failed to add tenant. Please try again later.');
            return redirect()->back()->with('error', 'Failed to add tenant.')->withInput();
        }
    }



    /**
     * Show the form for editing the specified tenant.
     */
    public function edit($id)
    {
        $tenant = Tenant::findOrFail($id);
        $units = Unit::all();
        return response()->json(['tenant' => $tenant, 'units' => $units]);
    }

    /**
     * Update the specified tenant.
     */
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:tenants,email,' . $id,
                'phone' => 'required|string|max:15',
                'unit_id' => 'required|exists:units,id',
                'lease_start_date' => 'required|date',
                'lease_end_date' => 'required|date|after_or_equal:lease_start_date',
                'rent_amount' => 'required|numeric|min:0',
            ]);

            $tenant = Tenant::findOrFail($id);
            $tenant->update($validatedData);

            Toastr::success('Tenant updated successfully.');
            return redirect()->route('tenant.index');
        } catch (\Exception $e) {
            Log::error('Error updating tenant:', ['message' => $e->getMessage()]);
            Toastr::error('Failed to update tenant. Please try again.');
            return redirect()->back()->with('error', 'Failed to update tenant.')->withInput();
        }
    }


    /**
     * Remove the specified tenant.
     */
    public function destroy($id)
    {
        try {
            $tenant = Tenant::findOrFail($id);
            $tenant->delete();

            Toastr::success('Tenant deleted successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error('Failed to delete tenant. Please try again.');
            return redirect()->back();
        }
    }
}
