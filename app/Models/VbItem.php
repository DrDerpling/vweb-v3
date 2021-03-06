<?php

namespace App\Models ;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VbItem extends Model
{
    use SoftDeletes;

    public function subType()
    {
        return $this->hasMany(SubType::class);
    }
}
