<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2887ba3bbf725b74d9cdf09c6a588ddf
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Class\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Class\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/PHP/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2887ba3bbf725b74d9cdf09c6a588ddf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2887ba3bbf725b74d9cdf09c6a588ddf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}