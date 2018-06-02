<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94866286d75fcf98134dc76ee0c31a9f
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
        'G' => 
        array (
            'GatewayWorker\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
        'GatewayWorker\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/gateway-worker/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit94866286d75fcf98134dc76ee0c31a9f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94866286d75fcf98134dc76ee0c31a9f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
