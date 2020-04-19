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


if(!isset($_GET['elementRef']) || !preg_match('/^\d+$/',$_GET['elementRef'])) {
  echo 'non trouvé';
  exit;
}
$oIFC = new \IFCPHP\Reader('../ifc_files_examples/house.ifc');

$oLinks = $oIFC->getElementByRef($_GET['elementRef'])->getOLinks();
$out = [];
$out['origin'] = $_GET['elementRef'];
$out['nodes'] = [];
foreach($oLinks as $oLink) {
  array_push($out['nodes'],['label' => $oLink->getTitle(),'id' => $oLink->refNum]);
}

header('Content-Type: application/json');
echo json_encode($out);