<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c14bdb5ed74e060476904990e0198cf
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FebriRahman\\Sambak\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FebriRahman\\Sambak\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8c14bdb5ed74e060476904990e0198cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8c14bdb5ed74e060476904990e0198cf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8c14bdb5ed74e060476904990e0198cf::$classMap;

        }, null, ClassLoader::class);
    }
}
