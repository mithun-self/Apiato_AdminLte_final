<?php

namespace App\Ship\Parents\Models;

use Apiato\Core\Abstracts\Models\Model as AbstractModel;
use Apiato\Core\Traits\HashIdTrait;
use Apiato\Core\Traits\HasResourceKeyTrait;
use OwenIt\Auditing\Contracts\Auditable;
use \OwenIt\Auditing\Auditable as AuditTrait;

/**
 * Class Model.
 *
 * @author  Mahmoud Zalt <mahmoud@zalt.me>
 */
abstract class Model extends AbstractModel implements Auditable
{

    use HashIdTrait;
    use HasResourceKeyTrait;
    use AuditTrait;

}
