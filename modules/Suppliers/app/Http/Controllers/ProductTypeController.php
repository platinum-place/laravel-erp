<?php

namespace Modules\Suppliers\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Suppliers\app\Http\Resources\ProductTypeResource;
use Modules\Suppliers\app\Services\ProductTypeService;

class ProductTypeController extends Controller
{
    protected ProductTypeService $service;

    public function __construct(ProductTypeService $service)
    {
        $this->service = $service;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $records = $this->service->all();

        return ProductTypeResource::collection($records);
    }
}
