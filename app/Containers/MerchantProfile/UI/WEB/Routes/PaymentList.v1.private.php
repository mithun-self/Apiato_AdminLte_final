<?php

/** @var Route $router */
$router->get('payment/payment-list', [
    'as' => 'web_merchantprofile_payment_list',
    'uses'  => 'MerchantProfile@paymentlist',
    'middleware' => [
      'auth:web',
    ],
]);
