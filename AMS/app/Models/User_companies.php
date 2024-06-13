<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_companies extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'users_companies';

    protected $fillable = [
        'user_id',
        'company_id',
        'role'
    ];
}
