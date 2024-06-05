<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_network extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'network_id'
    ];
}
