<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc92ea9f1d03b754f7fd66620b5de282d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc92ea9f1d03b754f7fd66620b5de282d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc92ea9f1d03b754f7fd66620b5de282d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc92ea9f1d03b754f7fd66620b5de282d::$classMap;

        }, null, ClassLoader::class);
    }
}