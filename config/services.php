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

    'firebase' => [
        'api_key' => 'AIzaSyB5h-RK7ScyJaZcloqr4fIFN-auFlIZjFE',
        'auth_domain' => 'slucyweb.firebaseapp.com',
        'database_url' => 'https://slucyweb-default-rtdb.firebaseio.com/',
        'project_id' => 'slucyweb',
        'storage_bucket' => 'slucyweb.appspot.com',
        'messaging_sender_id' => '975252992596',
        'app_id' => '1:975252992596:web:8fd44496bf76929813f3c1',
        'measurement_id' => 'G-RHJV965KJS',
    ],

];
