<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function subType()
    {
        return $this->hasMany(SubType::class);
    }
}
