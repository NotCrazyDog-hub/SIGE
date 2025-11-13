<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function supervisors()
    {
        return $this->hasMany(Supervisor::class);
    }

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class);
    }

    protected $fillable = [
        'name',
        'description',
    ];
}
