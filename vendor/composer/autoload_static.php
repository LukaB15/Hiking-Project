<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5570abfdae745015a90193d0ce4815ee
{
    public static $classMap = array (
        'ComposerAutoloaderInit986e40361a4ddc2115a8454f86b61ec0' => __DIR__ . '/../..' . '/src/vendor/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/../..' . '/src/vendor/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit986e40361a4ddc2115a8454f86b61ec0' => __DIR__ . '/../..' . '/src/vendor/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Database' => __DIR__ . '/../..' . '/src/models/Database.php',
        'Product' => __DIR__ . '/../..' . '/src/models/Product.php',
        'ProductController' => __DIR__ . '/../..' . '/src/controllers/ProductController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit5570abfdae745015a90193d0ce4815ee::$classMap;

        }, null, ClassLoader::class);
    }
}
