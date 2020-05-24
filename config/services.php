<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [

        'client_id' => '446093505986416', //Facebook API

        'client_secret' => 'f768c1228d55f6e20bc6e733e5b5eae9', //Facebook Secret

        'redirect' => 'http://laravel.localhost/login/facebook/callback',

     ],
     'google' => [
        'client_id' => '73315586382-30p62vpve4slnu71qnt75lv69u2u03ht.apps.googleusercontent.com', //Facebook API
        'client_secret' => '_iBk8ZkIelkpMviPPV0mDHUC', //Facebook Secret
        'redirect' => 'http://127.0.0.1:8000/callback',
     ],
     'paytm-wallet' => [
        'env' => env('PAYTM_ENVIRONMENT'), // values : (local | production)
        'merchant_id' => env('PAYTM_MERCHANT_ID'),
        'merchant_key' => env('PAYTM_MERCHANT_KEY'),
        'merchant_website' => env('PAYTM_MERCHANT_WEBSITE'),
        'channel' => env('PAYTM_CHANNEL'),
        'industry_type' => env('PAYTM_INDUSTRY_TYPE'),
],

];
