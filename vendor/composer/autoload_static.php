<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita47a5d7be0d948b05e9e4029902d90cd
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kimit\\Crud\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kimit\\Crud\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita47a5d7be0d948b05e9e4029902d90cd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita47a5d7be0d948b05e9e4029902d90cd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita47a5d7be0d948b05e9e4029902d90cd::$classMap;

        }, null, ClassLoader::class);
    }
}