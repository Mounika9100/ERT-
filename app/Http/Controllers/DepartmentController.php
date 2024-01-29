<?php

namespace App\Http\Controllers;
use App\Models\Department;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function showAddZoneForm()
{
    $departments = Department::all(); // Adjust this based on your actual model and table names
    return view('your_view_name', ['departments' => $departments]);
}
}
