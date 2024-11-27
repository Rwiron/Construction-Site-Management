<?php

namespace App\Http\Controllers\BuildingAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuildingAdminController extends Controller
{

      public function index()
      {
      return view('admin.dashboard');
      }
}
