<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit84a529cfcb912ea5ba09e79597ed5702
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'liw\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'liw\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit84a529cfcb912ea5ba09e79597ed5702::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit84a529cfcb912ea5ba09e79597ed5702::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
