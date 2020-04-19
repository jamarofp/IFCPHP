<?php

namespace IFCPHP\IFC4;

use IFCPHP\IFC4;

class IFC{

  //singleton
  private static $_instance = null;
  public $lines = [];



  //singleton instanciation
  private function __construct() {}
  public static function getInstance() {
     if(is_null(self::$_instance)) {
       self::$_instance = new IFC();  
     }
 
     return self::$_instance;
   }



  

  public function parseLine(string $line) {
    if(!preg_match('/^#(\d+)=([A-Z0-9]+)\((.*)\);$/',$line,$matches)) throw new Exception('line format does not match:'.$line);
    list ( $original,$refNum,$function,$valuesString) = $matches;
    $class = 'IFCPHP\IFC4\\'.@MapNameUppercaseClass::$params[$function];
    if(empty($class)) throw new Exception('function not found: '.$function);

    if(isset($this->_lines[$refNum])) throw new Exception('Reference already seen in the file '.$refNum);

//   $valuesString = "'d90775e9_7071_491c_a93',#5,'house',$,$,$,$,(#11),#19";
//   $valuesString = "((#1,#2),(#3,#4))";
    $values = self::parseValuesString($valuesString);

    $this->lines[$refNum] = new $class($values,$refNum);
  }

  public function getElementByRef($refNum) {
    return $this->lines[$refNum];
  }


  static public function parseValuesString($valuesString) : array {
//echo "\n---------------\n".'parsing string :'.$valuesString."\n";
    $values = [];
    $currentValue = '';
    $previousLetter = '';
    $letters = str_split($valuesString);
//print_r($letters);
    while(!empty($letters)) {
      $letter =  array_shift($letters);
//echo 'current letter: '.$letter.' remaining: '.count($letters)."\n";
      //an array
      if($letter == '(' && in_array($previousLetter,['','(',','])) {
//echo "------------\nentering subroutine\n";
        //on réutilise la fonction sur le sous ensemble
        $subString = '';
        $continue = true;
        $nbOpen = 1;
        while($continue && count($letters) > 0) {
          $subLetter =  array_shift($letters);
//echo ' - subroutine: '.$subLetter.' remaining: '.count($letters)."\n";

          if($subLetter == '(') {
            $nbOpen++;
//echo 'parenthese++:'.$nbOpen."\n";
            $subString .= $subLetter;
          }
          elseif($subLetter == ')') {
            $nbOpen--;
//echo 'parenthese--:'.$nbOpen."\n";
            if($nbOpen == 0) {
              $continue = false;
              //We remove the next ,
              array_shift($letters);
            } else {
              $subString .= $subLetter;
            }
          } else $subString .= $subLetter;
        }

//echo "\ncalling subfunction with string ".$subString.' remaining in main function '.implode('',$letters)."\n";
        array_push($values,self::parseValuesString($subString));

//echo "------------\nEND subroutine\n";
        //array_push($values,);
      }
      elseif($letter == ',') {
//echo ' --- adding value '.$currentValue.' position '.count($values)."\n";
        array_push($values,$currentValue);
        $currentValue = '';
      } else {
        $currentValue .= $letter;
//echo 'pushing letter to current value '.$currentValue."\n";
      }
      $previousLetter = $letter;
    }
    if(strlen($currentValue) != 0) {
//echo 'adding LAST value '.$currentValue."\n";      
      array_push($values,$currentValue);
    }
    return $values;
  }

}