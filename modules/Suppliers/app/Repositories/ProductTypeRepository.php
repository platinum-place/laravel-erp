<?php

namespace Modules\Suppliers\app\Repositories;

use App\Repositories\BaseRepository;
use App\Services\BaseService;
use Modules\Authentication\app\Models\User;
use Modules\Suppliers\app\Models\ProductType;

class ProductTypeRepository extends BaseRepository
{
    public function __construct(ProductType $model)
    {
        $this->model = $model;
    }
}
