<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $table = 'carmodels';

    protected $fillable = [
        'id',
        'brand',
        'model',
        'price'
    ];
}
