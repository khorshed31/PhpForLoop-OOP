<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf4356de558387bb14f589a3019b6481e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf4356de558387bb14f589a3019b6481e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf4356de558387bb14f589a3019b6481e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf4356de558387bb14f589a3019b6481e::$classMap;

        }, null, ClassLoader::class);
    }
}
