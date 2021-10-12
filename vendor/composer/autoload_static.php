<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitadb4d4e7134c2573bb7d34944816aa5e
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitadb4d4e7134c2573bb7d34944816aa5e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitadb4d4e7134c2573bb7d34944816aa5e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitadb4d4e7134c2573bb7d34944816aa5e::$classMap;

        }, null, ClassLoader::class);
    }
}
