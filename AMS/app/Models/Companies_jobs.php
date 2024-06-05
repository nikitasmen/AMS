<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies_jobs extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'job_id'
    ];
}
