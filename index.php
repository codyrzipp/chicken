<?php
/**
* COdy Zipp
*/
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require ("vendor/autoload.php");

//create an instance of the base class
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function() {
    $view = new Template();
    echo $view -> render('views/all-about-chickens.html');
});

//run fat free
$f3 -> run();

?>

