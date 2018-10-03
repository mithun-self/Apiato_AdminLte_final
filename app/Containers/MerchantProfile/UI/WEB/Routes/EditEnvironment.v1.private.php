<?php

/** @var Route $router */
$router->get('env', [
    'as' => 'web_merchantprofile_setenv',
    'uses'  => 'MerchantProfile@getenv',
    'middleware' => [
      'auth:web',
    ],
]);
