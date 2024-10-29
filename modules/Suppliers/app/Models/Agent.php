<?php

namespace Modules\Suppliers\app\Models;

use App\Models\BaseModel;

class Agent extends BaseModel
{
    protected $fillable = [
        'name', 'phone', 'vendor_id',
    ];
}
