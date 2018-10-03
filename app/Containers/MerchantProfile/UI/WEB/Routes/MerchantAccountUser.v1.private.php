<?php

/** @var Route $router */
$router->get('merchant_account_user', [
    'as' => 'web_merchantprofile_merchant_account_user',
    'uses'  => 'MerchantProfile@MerchantAccountUser',
    'middleware' => [
      'auth:web',
    ],
]);
