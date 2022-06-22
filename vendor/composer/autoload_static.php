<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit088b93c8d7a7b5fcf15975b2570a977c
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPExcel' => 
            array (
                0 => __DIR__ . '/..' . '/phpoffice/phpexcel/Classes',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit088b93c8d7a7b5fcf15975b2570a977c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit088b93c8d7a7b5fcf15975b2570a977c::$classMap;

        }, null, ClassLoader::class);
    }
}
