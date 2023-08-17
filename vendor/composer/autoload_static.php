<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc6b08339bbbd43b903e1d5afc991809e
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DankiCode\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DankiCode\\' => 
        array (
            0 => __DIR__ . '/../..' . '/DankiCode',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc6b08339bbbd43b903e1d5afc991809e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc6b08339bbbd43b903e1d5afc991809e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc6b08339bbbd43b903e1d5afc991809e::$classMap;

        }, null, ClassLoader::class);
    }
}