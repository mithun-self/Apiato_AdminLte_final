<?php

/** @var Route $router */
$router->get('merchant_management', [
    'as' => 'web_merchantprofile_merchant_management',
    'uses'  => 'MerchantProfile@MerchantManagement',
    'middleware' => [
      'auth:web',
    ],
]);
