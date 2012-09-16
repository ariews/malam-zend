<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * @author  arie
 */

try {
    include_once 'Zend/Loader/Autoloader.php';
}
catch (Exception $e)
{
    if (FALSE !== ($path = Kohana::find_file('vendor', 'Zend/library/Zend/Loader')))
    {
        set_include_path(get_include_path() . PATH_SEPARATOR . dirname(dirname($path)));
        require_once 'Zend/Loader/Autoloader.php';
    }
}

Zend_Loader_Autoloader::getInstance();
