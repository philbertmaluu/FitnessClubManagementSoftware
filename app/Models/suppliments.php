<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suppliments extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'level_id',
        'suppliment',
        'foodimage',
        'foodname',
        'created_by',
    ];

    public function level()
    {
        return $this->belongsTo('App\Models\level',  'level_id', 'id');
    }
}
