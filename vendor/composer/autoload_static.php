<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit498895633400b61c2562071f64d92883
{
    public static $files = array (
        '02da325b7775c27a0f76b2c486cbd2df' => __DIR__ . '/..' . '/draugiem/draugiem-php-sdk/src/DraugiemApi.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit498895633400b61c2562071f64d92883::$classMap;

        }, null, ClassLoader::class);
    }
}