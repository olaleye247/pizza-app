<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //turns the toppings 
    protected $casts = [
        'toppings' => 'array'
    ];
}
