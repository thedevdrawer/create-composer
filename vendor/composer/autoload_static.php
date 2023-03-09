<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e27d9fb09c7165e9bc3cca771cc593d
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DevDrawer\\Tutorial\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DevDrawer\\Tutorial\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e27d9fb09c7165e9bc3cca771cc593d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e27d9fb09c7165e9bc3cca771cc593d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0e27d9fb09c7165e9bc3cca771cc593d::$classMap;

        }, null, ClassLoader::class);
    }
}