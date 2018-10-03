<?php

namespace App\Containers\MerchantProfile\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllAuditsAction extends Action
{
    public function run()
    {
        $audits = Apiato::call('MerchantProfile@GetAllAuditsTask');

        return $audits;
    }
}
