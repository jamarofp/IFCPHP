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
            $this->_ifc  = new $className();
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
    print_r($this->_ifc->lines);
	} //end __construct
}