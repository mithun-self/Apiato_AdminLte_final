<?php

/** @var Route $router */
$router->get('testWebhook', [
    'as' => 'web_fee_testwebhook',
    'uses'  => 'Controller@testwebhook',
    'middleware' => [
      'auth:web',
    ],
]);
