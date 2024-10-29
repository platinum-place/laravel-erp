<?php

namespace Modules\Suppliers\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Suppliers\app\Http\Requests\Vendor\StoreVendorRequest;
use Modules\Suppliers\app\Http\Requests\Vendor\UpdateVendorRequest;
use Modules\Suppliers\app\Http\Resources\VendorResource;
use Modules\Suppliers\app\Services\VendorService;

class VendorController extends Controller
{
    protected VendorService $service;

    public function __construct(VendorService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $records = $this->service->all();

        return VendorResource::collection($records);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVendorRequest $request)
    {
        $record = $this->service->store($request->validated());

        return new VendorResource($record);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $record = $this->service->getById($id);

        return new VendorResource($record);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVendorRequest $request, string $id)
    {
        $record = $this->service->update($id, $request->validated());

        return new VendorResource($record);
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

        return new VendorResource($record);
    }
}
