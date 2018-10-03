<?php

/** @var Route $router */
$router->get('subsciption/coupon-list', [
    'as' => 'web_merchantprofile_get_subscription_coupons',
    'uses'  => 'MerchantProfile@GetSubscriptionCoupons',
    'middleware' => [
      'auth:web',
    ],
]);
