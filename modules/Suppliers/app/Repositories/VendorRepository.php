<?php

namespace Modules\Suppliers\app\Repositories;

use App\Repositories\BaseRepository;
use Modules\Suppliers\app\Models\Vendor;

class VendorRepository extends BaseRepository
{
    public function __construct(Vendor $model)
    {
        $this->model = $model;
    }
}
