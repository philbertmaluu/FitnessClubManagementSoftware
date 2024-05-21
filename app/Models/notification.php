<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    use HasFactory;


    protected $fillable = [
        'username',
        'admin',
    ];

    // public static function trainer()
    // {
    //     $this->hasOne();
    // }

    public function trainer()
    {
        return $this->hasOne(User::class, 'id', 'sender_id');
    }
}
