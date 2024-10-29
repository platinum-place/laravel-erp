<?php

namespace Modules\Suppliers\app\Services;

use App\Services\BaseService;
use Modules\Suppliers\app\Repositories\AgentRepository;

class AgentService extends BaseService
{
    public function __construct(AgentRepository $repository)
    {
        $this->repository = $repository;
    }
}
