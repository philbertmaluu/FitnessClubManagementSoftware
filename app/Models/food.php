<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    use HasFactory;
    protected $fillables=
    [
      'name',
      'calories',
      'carbohydrate',
      'protein',
      'fats',
      'vitamins',
      'dairyproducts',
      'fruits',
      'water',

        
    ];
}