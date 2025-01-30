<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public function staff()
    {
        return $this->hasMany(User::class);
    }
}
