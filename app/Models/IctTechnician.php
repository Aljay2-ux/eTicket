<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class IctTechnician extends Model
{
    public function ict_service_request(): HasOne {
        return $this->hasOne(IctServiceRequest::class);
    }

    public function employee(): BelongsTo {
        return $this->belongsto(Employee::class, 'employee_id');
    }
}
