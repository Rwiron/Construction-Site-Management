<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Log;
use Brian2694\Toastr\Facades\Toastr;

class UserManagementController extends Controller
{
    public function index()
    {
        try {
            $users = User::with('role')->get(); // Assuming 'role' is a relationship in your User model
            $roles = Role::all(); // Fetch all roles from the database
            return view('user.index', compact('users', 'roles')); // Pass roles and users to the view
        } catch (\Exception $e) {
            Log::error('Error fetching users or roles', ['message' => $e->getMessage()]);
            Toastr::error('Failed to load user data.', 'Error');
            return redirect()->back();
        }
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        try {
            // Validate input
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'role_id' => 'required|exists:roles,id',
                'password' => 'required|string|min:8',
            ]);

            // Create user
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role_id' => $request->role_id,
                'password' => bcrypt($request->password),
            ]);

            Log::info('User created successfully', ['user' => $user]);

            Toastr::success('User added successfully.', 'Success');
            return redirect()->route('user.management.index');
        } catch (\Exception $e) {
            Log::error('Error creating user', [
                'message' => $e->getMessage(),
                'request' => $request->all()
            ]);

            Toastr::error('Failed to add user. Please try again.', 'Error');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        try {
            $user = User::findOrFail($id);
            return view('user.edit', compact('user'));
        } catch (\Exception $e) {
            Log::error('Error fetching user for editing', ['message' => $e->getMessage()]);
            Toastr::error('Failed to load user for editing.', 'Error');
            return redirect()->route('user.management.index');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email,' . $id,
                'role_id' => 'required|exists:roles,id',
            ]);

            $user = User::findOrFail($id);
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'role_id' => $request->role_id,
            ]);

            Log::info('User updated successfully', ['user' => $user]);

            Toastr::success('User updated successfully.', 'Success');
            return redirect()->route('user.management.index');
        } catch (\Exception $e) {
            Log::error('Error updating user', [
                'message' => $e->getMessage(),
                'request' => $request->all()
            ]);

            Toastr::error('Failed to update user. Please try again.', 'Error');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();

            Log::info('User deleted successfully', ['user' => $user]);

            Toastr::success('User deleted successfully.', 'Success');
            return redirect()->route('user.management.index');
        } catch (\Exception $e) {
            Log::error('Error deleting user', ['message' => $e->getMessage()]);

            Toastr::error('Failed to delete user. Please try again.', 'Error');
            return redirect()->route('user.management.index');
        }
    }
}
