<?php

namespace IFCPHP\IFC4;

class Common{

  public $values = [];

  public function __construct($values) {
    if(isset(static::$params)) {
      if(is_array($values)) {
        if(count($values) != count(static::$params)) {
          print_r($values);
          print_r(static::$params);
          throw new Exception('Issue number of parameter: '.get_called_class().' - '.count($values).' - '.count(static::$params));
        }
        foreach(static::$params as $num => $param) {
          if($param['type'] == 'object') {
            $className = 'IFCPHP\IFC4\\'.$param['class'];
            $this->values[$num] =  new $className($values[$num]);
          } else if($param['type'] == 'array') {
            $className = 'IFCPHP\IFC4\\'.$param['class'];
            if(is_array($values[$num])) {
              foreach($values[$num] as $value) {
                $this->values[$num][] =  new $className($value); 
              }
            }
          } else {
            throw new Exception('unknown type: '.$param['type']);
          }
        }
      } else {
        if(!empty(static::$params[0])) {
          //echo get_called_class();
          $param = static::$params[0];
          $className = 'IFCPHP\IFC4\\'.$param['class'];
          $this->values[0] =  new $className($values);
        }
      }
    } else {
      echo 'HERE'.get_called_class();
      exit;
    }

  }
}