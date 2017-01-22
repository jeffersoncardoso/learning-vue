<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80b567544cc39d4cb0d3619b099bdeab
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LearningVue\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LearningVue\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit80b567544cc39d4cb0d3619b099bdeab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80b567544cc39d4cb0d3619b099bdeab::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
