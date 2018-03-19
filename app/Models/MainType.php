<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainType extends Model
{
    use SoftDeletes;

    public function subType()
    {
        return $this->hasMany(SubType::class);
    }

    public function brand()
    {
        return $this->hasManyThrough(Brand::class, SubType::class);
    }
}
