<?php

namespace App\Http\Controllers;

use App\CarModel;
use Illuminate\Http\Request;

class CarModelController extends Controller {
    public function get() {
        return CarModel::all();
    }

    public function create(Request $request) {
        $this->validate($request, [
            'brand' => 'required|alpha_num',
            'price' => 'required|int',
            'model' => 'required|alpha_num'
        ]);

        $carModel = new CarModel();
        $carModel->fill([
            'brand' => $request->input('brand'),
            'price' => $request->input('price'),
            'model' => $request->input('model'),
        ]);
        $carModel->save();

        return $carModel;
    }
}
