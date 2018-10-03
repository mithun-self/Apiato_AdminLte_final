<?php

/** @var Route $router */
$router->get('subscription/subscription-details', [
    'as' => 'web_merchantprofile_subscription_details',
    'uses'  => 'MerchantProfile@SubscriptionDetails',
    'middleware' => [
      'auth:web',
    ],
]);
