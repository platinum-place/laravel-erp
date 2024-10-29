<?php

namespace Modules\Suppliers\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Suppliers\app\Http\Requests\Agent\StoreAgentRequest;
use Modules\Suppliers\app\Http\Requests\Agent\UpdateAgentRequest;
use Modules\Suppliers\app\Http\Resources\AgentResource;
use Modules\Suppliers\app\Services\AgentService;

class AgentController extends Controller
{
    protected AgentService $service;

    public function __construct(AgentService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $records = $this->service->all();

        return AgentResource::collection($records);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAgentRequest $request)
    {
        $record = $this->service->store($request->validated());

        return new AgentResource($record);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $record = $this->service->getById($id);

        return new AgentResource($record);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgentRequest $request, string $id)
    {
        $record = $this->service->update($id, $request->validated());

        return new AgentResource($record);
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

        return new AgentResource($record);
    }
}
