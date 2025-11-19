<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function intern()
    {
        return $this->belongsTo(Intern::class);
    }
}
