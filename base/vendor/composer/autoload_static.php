<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0df8573d0024c3f59f3d2527b1a6445a
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eftec\\bladeone\\' => 15,
        ),
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'eftec\\bladeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/lib',
        ),
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0df8573d0024c3f59f3d2527b1a6445a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0df8573d0024c3f59f3d2527b1a6445a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0df8573d0024c3f59f3d2527b1a6445a::$classMap;

        }, null, ClassLoader::class);
    }
}
