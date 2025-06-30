<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    public function ict_inventories(): HasOne {
        return $this->hasOne(IctInventory::class);
    }

    public function employees(): HasOne {
        return $this->hasOne(Employee::class);
    }

    public function report_to_id(): BelongsTo {
        return $this->belongsto(User::class, 'report_to_id');
    }

    public function updated_by(): BelongsTo {
        return $this->belongsto(User::class, 'updated_by');
    }

    public function create_by(): BelongsTo {
        return $this->belongsto(User::class, 'created_by');
    }

    public function deleted_by(): BelongsTo {
        return $this->belongsto(User::class, 'deleted_by');
    }

    public function department_id(): BelongsTo {
        return $this->belongsto(Department::class, 'department_id');
    }

    public function division_id(): BelongsTo {
        return $this->belongsto(Division::class, 'division_id');
    }

    public function employee_type_id(): BelongsTo {
        return $this->belongsto(EmployeeType::class, 'employee_type_id');
    }

    public function employement_status_id(): BelongsTo {
        return $this->belongsto(EmployementStatus::class, 'employement_status_id');
    }

    public function location_id(): BelongsTo {
        return $this->belongsto(Location::class, 'location_id');
    }

    public function position_id(): BelongsTo {
        return $this->belongsto(Position::class, 'position_id');
    }

    public function work_day_id(): BelongsTo {
        return $this->belongsto(WorkDay::class, 'work_day_id');
    }
}
