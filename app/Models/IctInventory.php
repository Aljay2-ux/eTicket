<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\IctEquipmentType;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Locale;

class IctInventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_acquired',
        'date_issued',
        'date_condemed',
        'code',
        'serial_no',
        'aquisition_cost',


    ];

    public function ict_equipment_type(): BelongsTo {
        return $this->belongsto(IctEquipmentType::class, 'ict_equipment_type_id');
    }

    public function office_id(): BelongsTo {
        return $this->belongsto(Division::class, 'office_id');
    }

    public function status_id(): BelongsTo {
        return $this->belongsto(IctInventoryStatus::class, 'status_id');
    }

    public function issued_to(): BelongsTo {
        return $this->belongsto(Employee::class, 'issued_to');
    }

    public function location_id(): BelongsTo {
        return $this->belongsto(Location::class, 'location_id');
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
