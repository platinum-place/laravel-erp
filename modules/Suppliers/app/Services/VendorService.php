<?php

namespace Modules\Suppliers\app\Services;

use App\Services\BaseService;
use Modules\Suppliers\app\Repositories\VendorRepository;

class VendorService extends BaseService
{
    public function __construct(VendorRepository $repository)
    {
        $this->repository = $repository;
    }
}
