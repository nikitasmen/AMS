<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'budget',
        'start_date',
        'end_date',
        'status'
    ];

    public function projectsOfUser()
    {
        return $this->hasMany(User_projects::class, 'project_id', 'id');
    }
}
