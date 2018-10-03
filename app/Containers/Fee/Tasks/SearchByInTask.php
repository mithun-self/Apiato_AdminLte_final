<?php

namespace App\Containers\Fee\Tasks;

use App\Containers\Fee\Data\Repositories\FeeRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class SearchByInTask extends Task
{

    private $repository;

    public function __construct(FeeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($fee_ids)
    {
        try {
            return $this->repository->findWhereIn('id',$fee_ids);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
