<?php

namespace Modules\Suppliers\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Suppliers\app\Http\Requests\Supplier\StoreSupplierRequest;
use Modules\Suppliers\app\Http\Requests\Supplier\UpdateSupplierRequest;
use Modules\Suppliers\app\Http\Resources\SupplierResource;
use Modules\Suppliers\app\Services\SupplierService;

class SupplierController extends Controller
{
    protected SupplierService $service;

    public function __construct(SupplierService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $records = $this->service->all();

        return SupplierResource::collection($records);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSupplierRequest $request)
    {
        $record = $this->service->store($request->validated());

        return new SupplierResource($record);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $record = $this->service->getById($id);

        return new SupplierResource($record);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupplierRequest $request, string $id)
    {
        $record = $this->service->update($id, $request->validated());

        return new SupplierResource($record);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->service->destroy($id);

        return response()->noContent();
    }

    /**
     * Restore the specified resource from storage.
     */
    public function restore(string $id)
    {
        $record = $this->service->restore($id);

        return new SupplierResource($record);
    }
}
