<?php

namespace App\Containers\MerchantFeeMap\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateMerchantFeeMapAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $merchantfeemap = Apiato::call('MerchantFeeMap@CreateMerchantFeeMapTask', [$data]);

        return $merchantfeemap;
    }
}
