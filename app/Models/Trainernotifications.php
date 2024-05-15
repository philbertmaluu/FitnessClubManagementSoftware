<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainernotifications extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'admin',
        'is_active',
        'prototype',
    ];
}
