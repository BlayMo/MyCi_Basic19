<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2bd6895458fbacf909219a9b8c7b67f7
{
    public static $prefixesPsr0 = array (
        'o' => 
        array (
            'org\\bovigo\\vfs' => 
            array (
                0 => __DIR__ . '/..' . '/mikey179/vfsstream/src/main/php',
            ),
        ),
        'C' => 
        array (
            'Composer\\Installer' => 
            array (
                0 => __DIR__ . '/..' . '/compwright/codeigniter-installers/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit2bd6895458fbacf909219a9b8c7b67f7::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}