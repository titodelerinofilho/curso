<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4625b3879605f225dc21d7f7868c3303
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4625b3879605f225dc21d7f7868c3303::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4625b3879605f225dc21d7f7868c3303::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
