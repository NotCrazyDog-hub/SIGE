<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function supervisors()
    {
        return $this->hasMany(Supervisor::class);
    }

    protected $fillable = [
        'name',
        'description',
    ];
}
