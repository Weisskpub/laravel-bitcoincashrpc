<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Bitcoincashd JSON-RPC Scheme
    |--------------------------------------------------------------------------
    | URI scheme of Bitcoincash Core's JSON-RPC server.
    |
    | Use https to enable SSL connections with Core,
    | but this is strongly discouraged by developers.
    |
    */

    'scheme' => env('BITCOINCASHD_SCHEME', 'http'),

    /*
    |--------------------------------------------------------------------------
    | Bitcoincashd JSON-RPC Host
    |--------------------------------------------------------------------------
    | Tells service provider which hostname or IP address
    | Bitcoincash Core is running at.
    |
    | If Bitcoincash Core is running on the same PC as
    | laravel project use localhost or 127.0.0.1.
    |
    | If you're running Bitcoincash Core on the different PC,
    | you may also need to add rpcallowip=<server-ip-here> to your Bitcoincash.conf
    | file to allow connections from your laravel client.
    |
    */

    'host' => env('BITCOINCASHD_HOST', 'localhost'),

    /*
    |--------------------------------------------------------------------------
    | Bitcoincashd JSON-RPC Port
    |--------------------------------------------------------------------------
    | The port at which Bitcoincash Core is listening for JSON-RPC connections.
    | Default is 22555 for mainnet and 22556 for testnet.
    | You can also directly specify port by adding rpcport=<port>
    | to Bitcoincash.conf file.
    |
    */

    'port' => env('BITCOINCASHD_PORT', 8335),

    /*
    |--------------------------------------------------------------------------
    | Bitcoincashd JSON-RPC User
    |--------------------------------------------------------------------------
    | Username needs to be set exactly as in Bitcoincash.conf file
    | rpcuser=<username>.
    |
    */

    'user' => env('BITCOINCASHD_USER', ''),

    /*
    |--------------------------------------------------------------------------
    | Bitcoincashd JSON-RPC Password
    |--------------------------------------------------------------------------
    | Password needs to be set exactly as in Bitcoincash.conf file
    | rpcpassword=<password>.
    |
    */

    'password' => env('BITCOINCASHD_PASSWORD', ''),

    /*
    |--------------------------------------------------------------------------
    | Bitcoincashd JSON-RPC Server CA
    |--------------------------------------------------------------------------
    | If you're using SSL (https) to connect to your Bitcoincash Core
    | you can specify custom ca package to verify against.
    | Note that using Bitcoincash JSON-RPC over SSL is strongly discouraged.
    |
    */

    'ca' => null,
];
