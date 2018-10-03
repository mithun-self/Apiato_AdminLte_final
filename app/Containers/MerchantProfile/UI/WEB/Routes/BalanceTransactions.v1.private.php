<?php

/** @var Route $router */
$router->get('balance/transaction-list', [
    'as' => 'web_merchantprofile_gettransactions',
    'uses'  => 'MerchantProfile@gettransactions',
    'middleware' => [
      'auth:web',
    ],
]);
