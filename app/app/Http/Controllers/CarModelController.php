<?php

namespace App\Http\Controllers;

use App\CarModel;

class CarModelController extends Controller {
    public function get() {
        return CarModel::all();
    }
}
