<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited5320c20a02f616ea0b5f3ca1ddc2b0
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Noblesse\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Noblesse\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Noblesse',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInited5320c20a02f616ea0b5f3ca1ddc2b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited5320c20a02f616ea0b5f3ca1ddc2b0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}