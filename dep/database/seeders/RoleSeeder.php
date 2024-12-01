<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
         // Creating roles for the Building Solution Management System
         Role::create(['name' => 'superadmin']); // Full system access
         Role::create(['name' => 'building_admin']); // Manage building operations
         Role::create(['name' => 'tenant']); // Submit requests and pay invoices
         Role::create(['name' => 'staff']); // Perform maintenance tasks
    }

}
