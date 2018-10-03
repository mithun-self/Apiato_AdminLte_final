<?php

/** @var Route $router */
$router->get('payment/payment-details', [
    'as' => 'web_merchantprofile_paymentdetails',
    'uses'  => 'MerchantProfile@paymentdetails',
    'middleware' => [
      'auth:web',
    ],
]);
