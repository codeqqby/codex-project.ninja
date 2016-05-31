<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'github' => [
        'driver' => 'github',
        'auth'   => Sebwite\Git\Manager::AUTH_TOKEN,
        'secret' => env('GITHUB_SECRET')
    ],

    'bitbucket' => [
        'driver'      => 'bitbucket',
        'auth'   => Sebwite\Git\Manager::AUTH_OAUTH,
        'key'    => env('BITBUCKET_KEY', ''),
        'secret' => env('BITBUCKET_SECRET', '')
    ],
];
