<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IctServiceRequestType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function serviceRequests()
    {
        return $this->hasMany(IctServiceRequest::class, 'ict_service_request_type_id');
    }

}
