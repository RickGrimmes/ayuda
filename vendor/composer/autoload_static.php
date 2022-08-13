<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita6e779d78c80ff945ef35705e749e3b5
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyApp\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyApp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita6e779d78c80ff945ef35705e749e3b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita6e779d78c80ff945ef35705e749e3b5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita6e779d78c80ff945ef35705e749e3b5::$classMap;

        }, null, ClassLoader::class);
    }
}
