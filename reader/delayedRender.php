<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function IFCPHP_autoloader($class) {
  //echo $class."\n";
  $elems = preg_split('/\\\/',$class);

//print_r($elems);
  if($elems[0] == 'IFCPHP') {
    @include implode('/',$elems). '.php';
  } 
}


spl_autoload_register('IFCPHP_autoloader');


if(!preg_match('/^\d+$/',$_GET['elementRef'])) {
  echo 'non trouvé';
  exit;
}
$oIFC = new \IFCPHP\Reader('../ifc_files_examples/house.ifc');

echo $oIFC->getElementByRef($_GET['elementRef'])->render('html');