<?php

/** @var Route $router */
$router->get('balance/payout-list', [
    'as' => 'web_merchantprofile_getpayouts',
    'uses'  => 'MerchantProfile@getpayouts',
    'middleware' => [
      'auth:web',
    ],
]);
