<?php

/** @var Route $router */
$router->get('processing_limits', [
    'as' => 'web_merchantprofile_processing_limits',
    'uses'  => 'MerchantProfile@ProcessingLimits',
    'middleware' => [
      'auth:web',
    ],
]);
