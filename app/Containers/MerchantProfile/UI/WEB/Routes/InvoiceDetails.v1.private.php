<?php

/** @var Route $router */
$router->get('subscription/invoice-details', [
    'as' => 'web_merchantprofile_invoice_details',
    'uses'  => 'MerchantProfile@InvoiceDetails',
    'middleware' => [
      'auth:web',
    ],
]);
