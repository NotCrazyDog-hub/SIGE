<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function intern()
    {
        return $this->belongsTo(Intern::class);
    }

    protected $fillable = [
        'intern_id',
        'title',
        'grade',
        'work_description',
    ];
}
