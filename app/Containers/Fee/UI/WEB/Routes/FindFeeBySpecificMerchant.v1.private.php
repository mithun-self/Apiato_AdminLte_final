<?php

/** @var Route $router */
$router->post('get_fee_by_merchant_account', [
    'as' => 'web_fee_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
