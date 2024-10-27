<?php

namespace Modules\Suppliers\app\Repositories;

use App\Repositories\BaseRepository;
use App\Services\BaseService;
use Modules\Authentication\app\Models\User;
use Modules\Suppliers\app\Models\ProductType;
use Modules\Suppliers\app\Models\Supplier;

class SupplierRepository extends BaseRepository
{
    public function __construct(Supplier $model)
    {
        $this->model = $model;
    }
}
