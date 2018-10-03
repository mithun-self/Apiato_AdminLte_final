<?php

/** @var Route $router */
$router->get('audit/list', [
    'as' => 'web_merchantprofile_getauditlist',
    'uses'  => 'MerchantProfile@getauditlist',
    'middleware' => [
      'auth:web',
    ],
]);
