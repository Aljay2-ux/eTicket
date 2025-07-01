<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class IctInventoryStatus extends Model
{
    protected $fillable = [
        'name',
    ];

    public function ict_inventories(): HasOne {
        return $this->hasOne(IctInventory::class);
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

    public function ict_service_request(): HasOne {
        return $this->hasOne(IctServiceRequest::class);
    }
}
