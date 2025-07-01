<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class IctTechnician extends Model
{
    public function ict_service_request(): HasOne {
        return $this->hasOne(IctServiceRequest::class);
    }
}
