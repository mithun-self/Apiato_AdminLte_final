<?php

namespace App\Containers\Fee\Tasks;

use App\Containers\Fee\Data\Repositories\FeeRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class SearchByNotInTask extends Task
{

    private $repository;

    public function __construct(FeeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($accounts)
    {
        try {
            return $this->repository->findWhereNotIn('id',$accounts);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
