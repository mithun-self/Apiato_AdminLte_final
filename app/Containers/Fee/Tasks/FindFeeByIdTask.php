<?php

namespace App\Containers\Fee\Tasks;

use App\Containers\Fee\Data\Repositories\FeeRepository;
use App\Containers\Fee\Data\Repositories\AccountFeeMapRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use App\Ship\Parents\Requests\Request;

class FindFeeByIdTask extends Task
{

    private $repository;
    private $AccountFeeMapRepository;

    public function __construct(FeeRepository $repository, AccountFeeMapRepository $AccountFeeMapRepository)
    {
        $this->repository = $repository;
        $this->AccountFeeMapRepository = $AccountFeeMapRepository;
    }

    public function run(Request $request)
    {
        try {
            if($request->merchant_id){
                return $this->AccountFeeMapRepository->GetFeeByMerchantAccount($request);
            }else{
                 return $this->repository->find($request->id);
            }
            
           
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
