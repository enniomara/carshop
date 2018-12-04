<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    public function get()
    {
        $sales = DB::table('sales')
            ->selectRaw(
                'any_value(sales.id) as id,' .
                'any_value(employees.name) as name,' .
                'employee_id as id,' .
                'sum(carmodels.price) as sales'
            )
            ->join('carmodels', 'sales.carmodel_id', '=', 'carmodels.id')
            ->join('employees', 'sales.employee_id', '=', 'employees.id')
            ->groupBy('sales.employee_id')
            ->get();
        return $sales;
    }
}
