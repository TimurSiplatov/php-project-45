<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd00be87ada2b16be09e966d7f700bc2f
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        '4829b2fddb6a054e51fbedd69dcbc605' => __DIR__ . '/../..' . '/src/Cli.php',
        '596b366cd9b706014f2f9c9fabf5efc9' => __DIR__ . '/../..' . '/src/brain-calc.php',
        '907d366b2d64097c6921abb60c4c73c4' => __DIR__ . '/../..' . '/src/brain-even.php',
        '862387e0d0214d86193728ca8906b308' => __DIR__ . '/../..' . '/src/brain-gcd.php',
        'e6dfee624ed94e63dc5d94fd23bd4a3a' => __DIR__ . '/../..' . '/src/brain-prime.php',
        '1251d9376d672a9a9efdcb304eb22bb0' => __DIR__ . '/../..' . '/src/brain-progression.php',
    );

    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hexlet\\Code\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hexlet\\Code\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd00be87ada2b16be09e966d7f700bc2f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd00be87ada2b16be09e966d7f700bc2f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd00be87ada2b16be09e966d7f700bc2f::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitd00be87ada2b16be09e966d7f700bc2f::$classMap;

        }, null, ClassLoader::class);
    }
}
