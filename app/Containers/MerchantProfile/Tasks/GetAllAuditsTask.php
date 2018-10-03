<?php

namespace App\Containers\MerchantProfile\Tasks;

use App\Containers\MerchantProfile\Data\Repositories\AuditRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllAuditsTask extends Task
{

    private $repository;

    public function __construct(AuditRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
