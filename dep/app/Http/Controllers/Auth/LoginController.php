<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

class LoginController extends Controller
{
    /**
     * Show the login form.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle the login request.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log in the user
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            // Check the user role and redirect accordingly
            switch ($user->role->name) {
                case 'superadmin':
                    Toastr::success('Welcome, Superadmin!', 'Success');
                    return redirect()->route('superadmin.dashboard');
                case 'building_applicant':
                    Toastr::info('Your application is under review.', 'Pending Approval');
                    return redirect()->route('applicant.status');
                case 'building_admin':
                    Toastr::success('Welcome, Building Admin!', 'Success');
                    return redirect()->route('building_admin.dashboard');
                case 'tenant':
                    Toastr::success('Welcome, Tenant!', 'Success');
                    return redirect()->route('tenant.dashboard');
                case 'staff':
                    Toastr::success('Welcome, Staff!', 'Success');
                    return redirect()->route('staff.dashboard');
                default:
                    Auth::logout();
                    Toastr::error('Your account role is not recognized. Please contact support.', 'Login Failed');
                    return redirect()->route('login');
            }
        }

        // If login fails
        Toastr::error('Invalid email or password. Please try again.', 'Login Failed');
        return back()->withInput($request->only('email'));
    }

    /**
     * Handle logout.
     */
    public function logout()
    {
        Auth::logout();
        Toastr::success('Logout successful!', 'Success');
        return redirect()->route('login');
    }
}
