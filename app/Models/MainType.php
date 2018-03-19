<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainType extends Model
{
    public function subType()
    {
        return $this->hasMany(SubType::class);
    }

    public function brand()
    {
        return $this->hasManyThrough(Brand::class, SubType::class);
    }
}
