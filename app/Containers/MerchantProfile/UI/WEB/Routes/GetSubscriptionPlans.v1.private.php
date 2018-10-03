<?php

/** @var Route $router */
$router->get('subscription/plans', [
    'as' => 'web_merchantprofile_get_subscription_plans',
    'uses'  => 'MerchantProfile@GetSubscriptionPlans',
    'middleware' => [
      'auth:web',
    ],
]);
