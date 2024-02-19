<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0564ac3abd8e6ee101fbaf3875b1733a
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eftec\\bladeone\\' => 15,
        ),
        'E' => 
        array (
            'EzCode\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'eftec\\bladeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/lib',
        ),
        'EzCode\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0564ac3abd8e6ee101fbaf3875b1733a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0564ac3abd8e6ee101fbaf3875b1733a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0564ac3abd8e6ee101fbaf3875b1733a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit0564ac3abd8e6ee101fbaf3875b1733a::$classMap;

        }, null, ClassLoader::class);
    }
}
