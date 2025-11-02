<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    protected $fillable = [
            'name',
            'email',
            'course',
            'phone',
            'status',
    ];

    protected $casts = [
        'status' => 'boolean'
    ];
}
