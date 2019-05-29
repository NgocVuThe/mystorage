<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit879dda62d5e9706697f751b5e0a369c7
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controller\\BaseController' => __DIR__ . '/../..' . '/app/controllers/BaseController.php',
        'App\\Controller\\HomeController' => __DIR__ . '/../..' . '/app/controllers/HomeController.php',
        'App\\Controller\\ProductController' => __DIR__ . '/../..' . '/app/controllers/ProductController.php',
        'App\\Model\\BaseModel' => __DIR__ . '/../..' . '/app/models/BaseModel.php',
        'App\\Model\\Product' => __DIR__ . '/../..' . '/app/models/Product.php',
        'App\\Model\\Route' => __DIR__ . '/../..' . '/app/models/Route.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit879dda62d5e9706697f751b5e0a369c7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit879dda62d5e9706697f751b5e0a369c7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit879dda62d5e9706697f751b5e0a369c7::$classMap;

        }, null, ClassLoader::class);
    }
}
