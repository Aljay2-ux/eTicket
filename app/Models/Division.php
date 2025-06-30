<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Division extends Model
{   
    use HasFactory;

    protected $fillable = [
        'code',
    ];

    public function ict_inventories(): HasOne {
        return $this->hasOne(IctInventory::class);
    }

    public function employees(): HasOne {
        return $this->hasOne(Employee::class);
    }

    public function location_id(): BelongsTo {
        return $this->belongsto(Location::class, 'location_id');
    }
}
