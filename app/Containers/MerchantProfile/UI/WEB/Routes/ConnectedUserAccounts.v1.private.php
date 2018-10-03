<?php

/** @var Route $router */
$router->get('connected_user_accounts', [
    'as' => 'web_merchantprofile_connected_user_accounts',
    'uses'  => 'MerchantProfile@ConnectedUserAccounts',
    'middleware' => [
      'auth:web',
    ],
]);
