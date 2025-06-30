<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Location extends Model
{
    public function ict_inventories(): HasOne {
        return $this->hasOne(IctInventory::class);
    }

    public function employees(): HasOne {
        return $this->hasOne(employee::class);
    }

    public function create_by(): BelongsTo {
        return $this->belongsto(User::class, 'created_by');
    }

    public function updated_by(): BelongsTo {
        return $this->belongsto(User::class, 'updated_by');
    }

    public function deleted_by(): BelongsTo {
        return $this->belongsto(User::class, 'deleted_by');
    }
}
