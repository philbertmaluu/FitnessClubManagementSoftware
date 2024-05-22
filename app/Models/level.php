<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'created_by',
        'decription',
        'days',
    ];

    // protected $fillable = [
    //     'username',
    //     'email',
    //     'role',
    //     'password',
    //     'role_id',
    //     'level_id',
    //     'plan_id'
    // ];
}
