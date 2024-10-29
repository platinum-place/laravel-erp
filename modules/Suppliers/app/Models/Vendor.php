<?php

namespace Modules\Suppliers\app\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Model;

class Vendor extends BaseModel
{
    protected $fillable = [
        'name', 'phone','identification'
    ];
}
