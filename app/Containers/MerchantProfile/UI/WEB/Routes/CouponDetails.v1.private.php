<?php

/** @var Route $router */
$router->get('subscription/coupon-details', [
    'as' => 'web_merchantprofile_coupon_details',
    'uses'  => 'MerchantProfile@CouponDetails',
    'middleware' => [
      'auth:web',
    ],
]);
