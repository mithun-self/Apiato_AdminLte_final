<?php

/** @var Route $router */
$router->get('audits', [
    'as' => 'web_merchantprofile_getaudit',
    'uses'  => 'MerchantProfile@getaudit',
    'middleware' => [
      'auth:web',
    ],
]);
