<?php

namespace App\Containers\Fee\Models;

use App\Ship\Parents\Models\Model;
//use OwenIt\Auditing\Contracts\Auditable;

class Fee extends Model
{
    //use \OwenIt\Auditing\Auditable;
    
    protected $table = "fees"; 
    protected $fillable = [
        'name','type','value'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'fees';
}
