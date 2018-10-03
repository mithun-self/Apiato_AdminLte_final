<?php

/** @var Route $router */
$router->get('payments/dispute-list', [
    'as' => 'web_merchantprofile_disputes',
    'uses'  => 'MerchantProfile@disputes',
    'middleware' => [
      'auth:web',
    ],
]);
