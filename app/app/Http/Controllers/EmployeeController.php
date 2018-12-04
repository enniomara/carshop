<?php

namespace App\Http\Controllers;

use App\Employee;

class EmployeeController extends Controller
{
    public function get()
    {
        return Employee::all();
    }
}
