<?php
//controller/
//328
//Colton Matthews
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once('vendor/autoload.php');

$f3 = Base::instance();


//define rout for home
$f3->route('GET /', function (){
    //echo '<h1> Application </h1>';
    //render view page
    $view = new Template();
    echo $view->render('views/info.html');
});




// keep at bottom
$f3->run();