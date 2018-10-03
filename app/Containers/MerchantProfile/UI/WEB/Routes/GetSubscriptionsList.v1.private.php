<?php

/** @var Route $router */
$router->get('subscriptions', [
    'as' => 'web_merchantprofile_get_subscriptions',
    'uses'  => 'MerchantProfile@GetSubscriptions',
    'middleware' => [
      'auth:web',
    ],
]);
