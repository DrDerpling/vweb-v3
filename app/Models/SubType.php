<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubType extends Model
{
    use SoftDeletes;

    public function mainType()
    {
        return $this->belongsTo(MainType::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
