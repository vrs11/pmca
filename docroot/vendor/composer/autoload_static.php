<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a89bb8363bf0aa979b6822a0f336df2
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Clickalicious\\PhpMemAdmin\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Clickalicious\\PhpMemAdmin\\' => 
        array (
            0 => __DIR__ . '/..' . '/clickalicious/phpmemadmin/lib/Clickalicious/PhpMemAdmin',
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
        'P' => 
        array (
            'Psr' => 
            array (
                0 => __DIR__ . '/..' . '/clickalicious/memcached.php/lib',
            ),
        ),
        'C' => 
        array (
            'Clickalicious' => 
            array (
                0 => __DIR__ . '/..' . '/clickalicious/memcached.php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3a89bb8363bf0aa979b6822a0f336df2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3a89bb8363bf0aa979b6822a0f336df2::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit3a89bb8363bf0aa979b6822a0f336df2::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
