<?php

namespace App\Containers\Fee\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindFeeByIdAction extends Action
{
    public function run(Request $request)
    {
        if($request->merchant_id){

        	$fees_ids = Apiato::call('Fee@FindFeeByIdTask', [$request]);
        	$fee = Apiato::call('Fee@SearchByInAction', [$fees_ids]);

        }else{
        	$fee = Apiato::call('Fee@FindFeeByIdTask', [$request]);
        }

        return $fee;
    }
}
