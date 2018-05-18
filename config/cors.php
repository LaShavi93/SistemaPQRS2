<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS
    |--------------------------------------------------------------------------
    |
    | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
    | to accept any value.
    |
    */
   
    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],
    'allowedOriginsPatterns' => ['*'],
    'allowedHeaders' => ['*'],
    'allowedMethods' => ['GET', 'POST', 'PUT', 'PATCH', 'OPTIONS', 'DELETE'],
    'exposedHeaders' => [],
    'maxAge' => 0,
    'hosts' => [],
];
