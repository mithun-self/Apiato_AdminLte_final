<?php

namespace App\Containers\Accounts\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAccountsForMapAction extends Action
{
    public function run(Request $request)
    {
        if($request->merchant_id == 0 && $request->account_id == 0){
	        $accounts = Apiato::call('Accounts@GetAllAccountsMapTask');
	        $get_fees_id_for_all_accounts = Apiato::call('Fee@AccountFeeMapTask',[$accounts]);
	        $selected_fee_id = Apiato::call('Fee@SearchByInTask', [$get_fees_id_for_all_accounts]);
		    $not_selected_fee_id = Apiato::call('Fee@SearchByNotInTask', [$get_fees_id_for_all_accounts]);
		}else{
			if($request->account_id == 0){//if account is all
		    	$accounts = Apiato::call('Accounts@GetSpecificMerchantAccountMapTask',[$request->merchant_id]);
		    	$get_fees_id_for_all_accounts = Apiato::call('Fee@AccountFeeMapTask',[$accounts]);
		    	$selected_fee_id = Apiato::call('Fee@SearchByInTask', [$get_fees_id_for_all_accounts]);
		    	$not_selected_fee_id = Apiato::call('Fee@SearchByNotInTask', [$get_fees_id_for_all_accounts]);
		    }else{
		    	$fees_ids = Apiato::call('Fee@FindFeeByIdTask', [$request]);
        		$selected_fee_id = Apiato::call('Fee@SearchByInTask', [$fees_ids]);
		    	$not_selected_fee_id = Apiato::call('Fee@SearchByNotInTask', [$fees_ids]);
		    	//$accounts = Apiato::call('Accounts@GetSpecificMerchantAccountMapTask',[$request->merchant_id]);
		    }
	        
		}
		return ['selectd_fee'=>$selected_fee_id, 'unselected_fee'=>$not_selected_fee_id];
    }
}
