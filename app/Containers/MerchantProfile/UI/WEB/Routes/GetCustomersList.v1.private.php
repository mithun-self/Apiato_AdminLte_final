<?php

/** @var Route $router */
$router->get('customers', [
    'as' => 'web_merchantprofile_get_customers',
    'uses'  => 'MerchantProfile@GetCustomers',
    'middleware' => [
      'auth:web',
    ],
]);
