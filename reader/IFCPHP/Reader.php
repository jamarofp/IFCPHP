<?php

namespace IFCPHP;

class Reader{
  protected $_schema;

  protected $_ifc;

	public function __construct($fileName) {

    $handle = @fopen($fileName, "r");
    if (!$handle) throw new Exception('cannot open '.$fileName);
    $mode = 'start';

    while (($buffer = fgets($handle, 4096)) !== false) {
      $buffer = trim($buffer);
      if($buffer == 'HEADER;') $mode = 'header';
      if($buffer == 'DATA;') $mode = 'data';
      if($buffer == 'ENDSEC;') $mode = '';
      if($mode == 'start') {
        if($buffer != 'ISO-10303-21;') throw new Exception('cannot read file, should start with ISO-10303-21;');
      }
      if($mode == 'header') {
        if($buffer == 'HEADER;') continue;
        if(preg_match('/FILE_SCHEMA\(\(\'(.*)\'\)\);/',$buffer,$matches)) {
          $this->_schema = $matches[1];
          $className = '\IFCPHP\\'.$this->_schema.'\IFC';
          try{
            $this->_ifc  = $className::getInstance();
          } catch(Throwable $e) {
            throw new Exception('IFC schema not found:'.$this->_schema);
          }
        }
      }
      if($mode == 'data') {
        if($buffer == 'DATA;') continue;
        $this->_ifc->parseLine($buffer);
      }
    }
    fclose($handle);
	} //end __construct

   public function getElementByRef($refNum) {
    return $this->_ifc->getElementByRef($refNum);
  }

  public function getOElements($elementName):array {
    $out = [];
    foreach($this->_ifc->lines as $line) {
      if($line::$elementName == $elementName) array_push($out,$line);
    }
    return $out;
  }
}