<?php
$CONFIG = array (
    'installed' => false,
    'updatechecker' => false,
    'asset-pipeline.enabled' => false,
    'memcache.local' => '\\OC\\Memcache\\Redis',
    'filelocking.enabled' => 'true',
    'memcache.distributed' => '\\OC\\Memcache\\Redis',
    'memcache.locking' => '\\OC\\Memcache\\Redis',
    'redis' =>
        array (
            'host' => 'localhost',
            'port' => 6379,
            'timeout' => 0,
            'dbindex' => 1,
        )
);
