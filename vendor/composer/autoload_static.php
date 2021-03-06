<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite783d728e46e3e30954e64a16dc446cf
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Scrappers\\' => 10,
        ),
        'C' => 
        array (
            'Contracts\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Scrappers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/scrappers',
        ),
        'Contracts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/contracts',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite783d728e46e3e30954e64a16dc446cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite783d728e46e3e30954e64a16dc446cf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite783d728e46e3e30954e64a16dc446cf::$classMap;

        }, null, ClassLoader::class);
    }
}
