<?php

/** @var Route $router */
$router->get('plan/plan-details', [
    'as' => 'web_merchantprofile_plan_details',
    'uses'  => 'MerchantProfile@PlanDetails',
    'middleware' => [
      'auth:web',
    ],
]);
