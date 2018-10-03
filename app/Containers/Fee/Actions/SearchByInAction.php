<?php

namespace App\Containers\Fee\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class SearchByInAction extends Action
{
    public function run($fee_ids)
    {

        $fee_details = Apiato::call('Fee@SearchByInTask', [$fee_ids]);

        return $fee_details;
    }
}
