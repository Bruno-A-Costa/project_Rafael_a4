<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit95b0d57d6fcbbe59a140d1da0d8bc68d
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit95b0d57d6fcbbe59a140d1da0d8bc68d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit95b0d57d6fcbbe59a140d1da0d8bc68d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit95b0d57d6fcbbe59a140d1da0d8bc68d::$classMap;

        }, null, ClassLoader::class);
    }
}
