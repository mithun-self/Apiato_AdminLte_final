<?php

namespace App\Containers\MerchantProfile\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class AuditRepository
 */
class AuditRepository extends Repository
{

	protected $container = 'MerchantProfile';
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
