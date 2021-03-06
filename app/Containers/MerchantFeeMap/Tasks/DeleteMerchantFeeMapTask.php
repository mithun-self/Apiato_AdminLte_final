<?php

namespace App\Containers\MerchantFeeMap\Tasks;

use App\Containers\MerchantFeeMap\Data\Repositories\MerchantFeeMapRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteMerchantFeeMapTask extends Task
{

    private $repository;

    public function __construct(MerchantFeeMapRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
