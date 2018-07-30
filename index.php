<?php 

define('DS',DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__).DS);
define('PATH',ROOT.'app'.DS);
define('base_url', "http://".$_SERVER['SERVER_NAME']."/kayser/");

require_once PATH.'Request.php';
require_once PATH.'Bootstrap.php';
require_once PATH.'Database.php';
require_once PATH.'Model.php';
require_once PATH.'Controller.php';
require_once PATH.'View.php';
Bootstrap::run(new Request());


