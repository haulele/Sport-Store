<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit33f0947ca15cca5b01a6dc00e6fa54ab
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit33f0947ca15cca5b01a6dc00e6fa54ab', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit33f0947ca15cca5b01a6dc00e6fa54ab', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit33f0947ca15cca5b01a6dc00e6fa54ab::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit33f0947ca15cca5b01a6dc00e6fa54ab::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire33f0947ca15cca5b01a6dc00e6fa54ab($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire33f0947ca15cca5b01a6dc00e6fa54ab($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
