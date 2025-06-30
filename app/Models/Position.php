<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Position extends Model
{
    public function employees(): HasOne {
        return $this->hasOne(employee::class);
    }
}
