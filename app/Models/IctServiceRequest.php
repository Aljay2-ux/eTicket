<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IctServiceRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'requested_by',
        'date_requested',
        'date_completed',
        'date_approved',
        'date_needed',
        'released_by',
        'date-received',
        'date_released',
        'description_of_request',
        'description_of_work',
        'description_of_findings',
        'property_no',
        'remarks',
        'created_at',
        'deleted_at',
        'updated_at',
        'synced_at',
        'description_of_request', 
        'ict_service_request_type_id',
        'ict_inventory_id',
    ];

     protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->date_requested = now(); // Automatically sets to current date and time
        });
    }

    public function requestType()
    {
        return $this->belongsTo(IctServiceRequestType::class, 'ict_service_request_type_id');
    }

    public function ict_inventory_id(): BelongsTo {
        return $this->belongsto(IctInventory::class, 'ict_inventory_id');
    }

    public function ict_technician(): BelongsTo {
        return $this->belongsto(IctTechnician::class, 'ict_technician_id');
    }

    public function ict_unit_status_id(): BelongsTo {
        return $this->belongsto(IctInventoryStatus::class, 'ict_unit_status_id');
    }

    public function ict_request_status_id(): BelongsTo {
        return $this->belongsto(IctServiceRequestStatus::class, 'ict_request_status_id');
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
