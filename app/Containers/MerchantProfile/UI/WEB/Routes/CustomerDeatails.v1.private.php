<?php

/** @var Route $router */
$router->get('customer/customer-details', [
    'as' => 'web_merchantprofile_get_customer_details',
    'uses'  => 'MerchantProfile@GetCustomerDetails',
    'middleware' => [
      'auth:web',
    ],
]);
