<?php
class PimComposer_Plugin extends Pimcore_API_Plugin_Abstract implements Pimcore_API_Plugin_Interface
{
    public function __construct($jsPaths = null, $cssPaths = null)
    {
        parent::__construct($jsPaths, $cssPaths);

        // composer autoloader
        $autoloader = PIMCORE_DOCUMENT_ROOT . '/vendor/autoload.php';
        if (file_exists($autoloader)) {
            require_once $autoloader;
        }
    }

    public static function needsReloadAfterInstall()
    {
        return true;
    }

    public static function isInstalled()
    {
        return true;
    }

    public static function install()
    {
    }

    public static function uninstall()
    {
    }
}
