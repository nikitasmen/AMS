<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_network extends Model
{
    use HasFactory;
    protected $table = 'user_network';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'network_id'
    ];
}
