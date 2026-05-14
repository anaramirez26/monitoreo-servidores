<?php

return [
    'default' => env('DB_CONNECTION', 'pgsql'),
    'connections' => [
        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', 'db'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'appdb'),
            'username' => env('DB_USERNAME', 'appuser'),
            'password' => env('DB_PASSWORD', 'apppassword'),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    | Esta es la línea que faltaba. Le dice a Laravel que la tabla de
    | control en Postgres se llamará 'migrations'.
    */
    'migrations' => 'migrations',
];