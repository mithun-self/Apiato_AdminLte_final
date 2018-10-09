<?php

/** @var Route $router */
$router->get('notification', [
    'as' => 'web_fee_checknotification',
    'uses'  => 'Controller@checknotification',
    'middleware' => [
      'auth:web',
    ],
]);
