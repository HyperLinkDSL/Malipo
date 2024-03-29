<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3d70a8720585538f482a0c6219409048
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3d70a8720585538f482a0c6219409048::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3d70a8720585538f482a0c6219409048::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3d70a8720585538f482a0c6219409048::$classMap;

        }, null, ClassLoader::class);
    }
}
