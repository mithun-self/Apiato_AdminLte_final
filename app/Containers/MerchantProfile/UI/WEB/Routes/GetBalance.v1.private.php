<?php

/** @var Route $router */
$router->get('balance/balance-report', [
    'as' => 'web_merchantprofile_getbalance',
    'uses'  => 'MerchantProfile@getbalance',
    'middleware' => [
      'auth:web',
    ],
]);
