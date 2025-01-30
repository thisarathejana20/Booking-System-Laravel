<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
}
