<?php

namespace App\Containers\Fee\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;
use App\Containers\Fee\Models\AccountFeeMap;
use DB;
/**
 * Class AccountFeeMapRepository
 */
class AccountFeeMapRepository extends Repository
{

	protected $container = 'Fee';
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

    public function GetFeeByMerchantAccount($id) {
    	return AccountFeeMap::where('account_id',$id->account_id)->pluck('fees_id')->toArray();
    }

    public function GetFeesIdForAccount($accounts){

        $get_fees_id_for_accounts = AccountFeeMap::whereIn('account_id',$accounts['account_from_merchant_id'])->groupBy('fees_id')->having(DB::raw('COUNT(DISTINCT `account_fees`.`account_id`)'),'=', $accounts['account_count_for_merchant'])->pluck('fees_id')->toArray();

        return $get_fees_id_for_accounts;

    }

}
