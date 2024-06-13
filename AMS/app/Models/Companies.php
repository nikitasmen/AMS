<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'website',
        'major_industry'
    ];

    public function job_openings()
    {
        return $this->hasMany(Job_openings::class, 'company_id', 'id');
    }
}
