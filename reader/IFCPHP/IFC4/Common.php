<?php

namespace IFCPHP\IFC4;

class Common{

  public $values = [];
  public $refNum = 0;
  public $paramName = '';

  public function __construct($values,$refNum = 0,$paramName = '') {
    $this->refNum = $refNum;


    if(empty($this->refNum) && preg_match('/#(\d+)/',$values,$matches)) {
      $this->refNum = $matches[1];
    }


    $this->paramName = $paramName;
    if(isset(static::$params)) {


      if(empty(static::$params) && is_string($values) && !empty($values) && preg_match('/^#(\d+)$/',$values,$matches)) {
        $className = 'IFCPHP\IFC4\Base\Value';
        $this->values[0] =  new $className($values,$matches[1]);
      }
      if(is_array($values)) {
        if(count($values) != count(static::$params)) {
          print_r($values);
          print_r(static::$params);
          throw new Exception('Issue number of parameter: '.get_called_class().' - '.count($values).' - '.count(static::$params));
        }
        foreach(static::$params as $num => $param) {
          if($param['type'] == 'object') {
            $className = 'IFCPHP\IFC4\\'.$param['class'];
            $this->values[$num] =  new $className($values[$num],0,$param['name']);
          } else if($param['type'] == 'array') {
            $className = 'IFCPHP\IFC4\\'.$param['class'];
            if(is_array($values[$num])) {
              foreach($values[$num] as $value) {
                $this->values[$num][] =  new $className($value,0,$param['name']); 
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

  public function getValueString($removeEmptyValues = true):string {
    $string = '';

    foreach($this->values as $num => $elem) {
      if(is_array($elem) && count($elem) > 1) {
        $string .= '(';
        foreach($elem as $subNum => $subElem) {
          $string .= $subElem->getValueString($removeEmptyValues).',';
        }
        $string .= ')';
      } elseif(is_array($elem) && count($elem) == 1) {
        $string .= $elem[0]->getValueString($removeEmptyValues);
      } else {
        $string .= $elem->getValueString($removeEmptyValues);
      }
      $string .= ',';
    }
    return $string;
  }


  public function getTitle():string {
    $elementName = '';
    if(isset($this->paramName) && !empty($this->paramName)) $elementName .= $this->paramName.' - ';
    if(isset($this::$translationFR)) $elementName .= $this::$translationFR;
    else $elementName .= $this::$elementName;
    return $elementName;
  }

  public function getOLinks():array {
    $out = [];
    if(empty($this->refNum)) return $out;
    preg_match_all('/#(\d+)/',$this->getValueString(false),$matches);
    if($matches) {
      foreach($matches[1] as $refNum) {
        if($refNum == $this->refNum) continue;
        array_push($out,IFC::getInstance()->lines[$refNum]);
      }
    }
    foreach(IFC::getInstance()->lines as $ref => $oElement) {
      if($ref == $this->refNum) continue;
      if(preg_match('/#'.$this->refNum.',?\)?/',$oElement->getValueString(false))) {
        array_push($out,$oElement);
      }
    }
    return $out;
  }

  public function render($renderType,$options = []) {
    if($renderType == 'html') {

      if(preg_match('/^\,*$/',$this->getValueString(true))) return '';

     

      

      $html = '<div class="element">';
        $html .= '<h3 class="elementName" elementCode="'.$this::$elementName.'" elementRef="'.$this->refNum.'">'.$this->getTitle().'</h3>';
        $html .= '<div class="values">';

          if(!empty($this->refNum)) {
            $html .= '<div class="element">';
              $html .= '<h3>Paramètres</h3>';
              $html .= '<div class="values">';
          }
              foreach($this->values as $num => $elem) {

                $html .= '<div paramNum="'.$num.'">';
                if(is_array($elem)) {
                  $html .= '<div class="paramArray">';
                  foreach($elem as $subNum => $subElem) {
                    if(!empty($elem->refNum)) $html .= '<div paramNum="'.$subNum.'"><div class="delayedRender" elementRef="'.$this->refNum.'"> delayed render'.$this->refNum.'</div></div>';
                    else $html .= '<div paramNum="'.$subNum.'">'.$subElem->render('html').'</div>';
                  }
                  $html .= '</div>';
                } else {
                  if(!empty($elem->refNum)) {
                    $html .= '<div class=" element" elementCode="'.$elem::$elementName.'"  elementRef="'.$elem->refNum.'">';
                      $html .= '<h3 class="elementName delayedRender" elementCode="'.$elem::$elementName.'" elementRef="'.$elem->refNum.'">'.$elem->getTitle().'</h3>';
                      $html .= '<div class="values">';
                      $html .= '</div>';
                    $html .= '</div>';

                  } else $html .= $elem->render('html');
                }
                $html .= '</div>';
              } //end foreach values

          if(!empty($this->refNum)) {
            $html .= '</div>';
            $html .= '</div>';
          }

          if(!empty($this->refNum)) {
            $oLinks = $this->getOLinks();
            if(!empty($oLinks)) {
              $html .= '<div class="element">';
                $html .= '<h3>Liens</h3>';
                $html .= '<div class="values">';
                foreach($oLinks as $oLink) {
                  $html .= '<div class=" element" elementCode="'.$oLink::$elementName.'"  elementRef="'.$oLink->refNum.'">';
                    $html .= '<h3 class="elementName delayedRender" elementCode="'.$oLink::$elementName.'" elementRef="'.$oLink->refNum.'">'.$oLink->getTitle().'</h3>';
                    $html .= '<div class="values">';
                    $html .= '</div>';
                  $html .= '</div>';
                }
                $html .= '</div>';
              $html .= '</div>';
            }
          }


        $html .= '</div>';
      $html .= '</div>';
      return $html;
    }
    throw new Exception('render not found: '.$renderType);
  }
}