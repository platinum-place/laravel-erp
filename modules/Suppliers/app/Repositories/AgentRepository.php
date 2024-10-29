<?php

namespace Modules\Suppliers\app\Repositories;

use App\Repositories\BaseRepository;
use Modules\Suppliers\app\Models\Agent;

class AgentRepository extends BaseRepository
{
    public function __construct(Agent $model)
    {
        $this->model = $model;
    }
}
