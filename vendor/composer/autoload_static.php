<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3bdc40187f33ef45dae52c7dfc2676a7
{
    public static $prefixesPsr0 = array (
        'Z' => 
        array (
            'Zend_' => 
            array (
                0 => __DIR__ . '/..' . '/zend/gdata/library',
            ),
        ),
    );

    public static $classMap = array (
        'src\\cla\\Validation' => __DIR__ . '/../..' . '/src/classes/Validation.php',
        'src\\controller\\Crud' => __DIR__ . '/../..' . '/src/controller/Crud.php',
        'src\\model\\Database' => __DIR__ . '/../..' . '/src/model/Database.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit3bdc40187f33ef45dae52c7dfc2676a7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit3bdc40187f33ef45dae52c7dfc2676a7::$classMap;

        }, null, ClassLoader::class);
    }
}
