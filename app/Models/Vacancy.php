<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    protected $fillable = [
        'department_id',
        'title',
        'description',
        'workload',
    ];
}
