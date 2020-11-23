<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b56e72230825cc0b9810c83886dd99a
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b56e72230825cc0b9810c83886dd99a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b56e72230825cc0b9810c83886dd99a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}