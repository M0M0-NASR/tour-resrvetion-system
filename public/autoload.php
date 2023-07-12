<?php

/*
define Directories and Files 
*/

define("DS" , DIRECTORY_SEPARATOR);
define("ROOT" , dirname(__DIR__).DS);
define("APP" , ROOT."app".DS);
define("CONFIG" , APP."config".DS);
define("CONTROLLER" , APP."controllers".DS);
define("CORE" , APP."core".DS);
define("LIBS" , APP."libs".DS);
define("MODELS" , APP."models".DS);
define("VIEWS" , APP."views".DS);
define("ASSETS" ,ROOT."public".DS."assets");
require_once(CONFIG."helpers.php");
require_once(CONFIG."config.php");


$modules = [ROOT, APP , CONFIG , CONTROLLER , CORE , LIBS , MODELS , VIEWS , ASSETS];

set_include_path(get_include_path().PATH_SEPARATOR.implode(PATH_SEPARATOR,$modules));
spl_autoload_register('spl_autoload');

?>