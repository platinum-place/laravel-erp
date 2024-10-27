<?php

namespace Modules\Suppliers\app\Enums;

use App\Enums\EnumsTrait;

enum ProductTypeEnum: int
{
    use EnumsTrait;

    case service = 1;

    case storable = 2;
}
