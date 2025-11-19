<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    public function reports()
    {
        return $this->hasMany(Report::class);
    }

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
