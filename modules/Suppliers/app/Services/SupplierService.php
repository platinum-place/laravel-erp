<?php

namespace Modules\Suppliers\app\Services;

use App\Services\BaseService;
use Modules\Authentication\app\Repositories\ClientRepository;
use Modules\Suppliers\app\Repositories\ProductTypeRepository;
use Modules\Suppliers\app\Repositories\SupplierRepository;

class SupplierService extends BaseService
{
    public function __construct(SupplierRepository $repository)
    {
        $this->repository = $repository;
    }
}
