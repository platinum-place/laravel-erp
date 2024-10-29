<?php

namespace Modules\Suppliers\app\Models;

use App\Models\BaseModel;

class Vendor extends BaseModel
{
    protected $fillable = [
        'name', 'phone', 'identification',
    ];
}
