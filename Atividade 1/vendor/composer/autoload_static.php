<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b60a866ef39a4cbfcec94412a3ab839
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Src\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b60a866ef39a4cbfcec94412a3ab839::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b60a866ef39a4cbfcec94412a3ab839::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b60a866ef39a4cbfcec94412a3ab839::$classMap;

        }, null, ClassLoader::class);
    }
}
