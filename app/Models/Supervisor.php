<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    protected $fillable = [
        'name',
        'email',
        'department_id',
        'phone',
    ];
}
