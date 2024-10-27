<?php

namespace Modules\Suppliers\app\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Model;

class ProductType extends BaseModel
{
    protected $fillable = [
        'name',
    ];
}
