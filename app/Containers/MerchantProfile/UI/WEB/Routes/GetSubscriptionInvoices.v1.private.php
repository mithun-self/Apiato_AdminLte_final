<?php

/** @var Route $router */
$router->get('subscription/invoice-list', [
    'as' => 'web_merchantprofile_get_subscription_invoices',
    'uses'  => 'MerchantProfile@GetSubscriptionInvoices',
    'middleware' => [
      'auth:web',
    ],
]);
