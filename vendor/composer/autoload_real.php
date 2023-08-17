<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc6b08339bbbd43b903e1d5afc991809e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitc6b08339bbbd43b903e1d5afc991809e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc6b08339bbbd43b903e1d5afc991809e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc6b08339bbbd43b903e1d5afc991809e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
