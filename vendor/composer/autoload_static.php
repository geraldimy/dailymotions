<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c2b300e43a5a085438fd222af7a504f
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dailymotion\\sdk\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dailymotion\\sdk\\' => 
        array (
            0 => __DIR__ . '/../..' . '/sdk',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c2b300e43a5a085438fd222af7a504f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c2b300e43a5a085438fd222af7a504f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2c2b300e43a5a085438fd222af7a504f::$classMap;

        }, null, ClassLoader::class);
    }
}