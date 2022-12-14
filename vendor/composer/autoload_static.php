<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7cd93693224a8cd3658d7f04408e0b3c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'A' => 
        array (
            'Agaly\\Konstruktor\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Agaly\\Konstruktor\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7cd93693224a8cd3658d7f04408e0b3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7cd93693224a8cd3658d7f04408e0b3c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7cd93693224a8cd3658d7f04408e0b3c::$classMap;

        }, null, ClassLoader::class);
    }
}
