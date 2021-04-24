<?php

    defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
    defined('SITE_ROOT') ? null : define('SITE_ROOT', DS . 'xampp'.DS.'htdocs'.DS.'DistroProject'.DS.'distroAPI');

    //includes folder path
    defined('INC_PATH') ? null : define('INC_PATH', SITE_ROOT.DS.'includes');
    //core folder path
    defined('CORE_PATH') ? null : define('CORE_PATH', SITE_ROOT.DS.'core');


    //load the config file first
    require_once(INC_PATH.DS.'config.php');

    //core classes
    require_once(CORE_PATH.DS.'products.php');
    require_once(CORE_PATH.DS.'wishlists.php');

?>