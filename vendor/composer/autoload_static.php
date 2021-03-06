<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcffe0c8790f1ca291ad1aa0b812d9043
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcffe0c8790f1ca291ad1aa0b812d9043::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcffe0c8790f1ca291ad1aa0b812d9043::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcffe0c8790f1ca291ad1aa0b812d9043::$classMap;

        }, null, ClassLoader::class);
    }
}
