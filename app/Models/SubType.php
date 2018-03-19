<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubType extends Model
{
    public function mainType()
    {
        return $this->belongsTo(MainType::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
