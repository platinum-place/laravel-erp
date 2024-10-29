<?php

namespace Modules\Suppliers\app\Services;

use App\Services\BaseService;
use Modules\Suppliers\app\Repositories\ProductTypeRepository;

class ProductTypeService extends BaseService
{
    public function __construct(ProductTypeRepository $repository)
    {
        $this->repository = $repository;
    }
}
