<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = [
        'department_id',
        'title',
        'description',
        'workload',
    ];
}
