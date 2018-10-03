<?php

namespace App\Containers\Fee\Tasks;

use App\Containers\Fee\Data\Repositories\AccountFeeMapRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class ToGetFromMappingTask extends Task
{

    private $repository;

    public function __construct(AccountFeeMapRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->findWhereIn('account_id',$id)->pluck('fees_id')->toArray();
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
