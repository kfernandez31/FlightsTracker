<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4ac58e261e3e7e6fc435f186fe67888e
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Yosymfony\\Toml\\' => 15,
            'Yosymfony\\ParserUtils\\' => 22,
        ),
        'F' => 
        array (
            'FlightsTracker\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Yosymfony\\Toml\\' => 
        array (
            0 => __DIR__ . '/..' . '/yosymfony/toml/src',
        ),
        'Yosymfony\\ParserUtils\\' => 
        array (
            0 => __DIR__ . '/..' . '/yosymfony/parser-utils/src',
        ),
        'FlightsTracker\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4ac58e261e3e7e6fc435f186fe67888e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4ac58e261e3e7e6fc435f186fe67888e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4ac58e261e3e7e6fc435f186fe67888e::$classMap;

        }, null, ClassLoader::class);
    }
}