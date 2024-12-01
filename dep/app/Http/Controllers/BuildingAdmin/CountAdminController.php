<?php

namespace App\Http\Controllers\BuildingAdmin;

use App\Http\Controllers\Controller;
use App\Models\BuildingApplicant;

class CountAdminController extends Controller
{
    public function index()
    {
        // Count applications based on status
        $totalApplications = BuildingApplicant::count();
        $approved = BuildingApplicant::where('status', 'approved')->count();
        $underReview = BuildingApplicant::where('status', 'under review')->count();
        $rejected = BuildingApplicant::where('status', 'rejected')->count();
        $submitted = BuildingApplicant::where('status', 'submitted')->count();

        // Pass data to the view
        return view('admin.count', compact('totalApplications', 'approved', 'underReview', 'rejected', 'submitted'));
    }
}
