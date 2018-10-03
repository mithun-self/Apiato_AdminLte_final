<?php

namespace App\Containers\Accounts\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllAccountsForMerchantAction extends Action
{
    public function run(Request $request)
    {	
    	if($request->merchant_id == 0 && $request->account_id == 0){
    		$fee_details = Apiato::call('Fee@GetAllFeesTask');
    	}else{

	        $accounts_ids = Apiato::call('Accounts@GetAllAccountsForMerchantTask', [$request->merchant_id]);
	        $fee_ids = Apiato::call('Fee@ToGetFromMappingTask', [$accounts_ids]);
	        $fee_details = Apiato::call('Fee@SearchByInTask', [$fee_ids]);
    	}
        return $fee_details;
    }
}
