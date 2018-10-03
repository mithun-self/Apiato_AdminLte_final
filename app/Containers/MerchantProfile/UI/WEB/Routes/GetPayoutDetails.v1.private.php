<?php

/** @var Route $router */
$router->get('balance/payout-details', [
    'as' => 'web_merchantprofile_getpayoutdetails',
    'uses'  => 'MerchantProfile@getpayoutdetails',
    'middleware' => [
      'auth:web',
    ],
]);
