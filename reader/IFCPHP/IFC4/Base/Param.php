<?php
namespace IFCPHP\IFC4\Base;
use IFCPHP\IFC4 as IFC;

class Param extends IFC\Common{
	public function __construct($value) {
		$this->values[0] = $value;
	}

	public function render($renderType,$options = []) {
		if($renderType == 'html') {
			if(preg_match('/^#(\d+)$/',$this->values[0],$matches)) {
			$oElement = IFC\IFC::getInstance()->getElementByRef($matches[1]);
			return $oElement->render('html');
		}
		$html = $this->values[0];
		return $html;
	}
		throw new Exception('render not found: '.$renderType);
	}

  public function getValueString($removeEmptyValues = true):string {
    if($removeEmptyValues && in_array($this->values[0],['$',"''",'*'])) return '';
    return $this->values[0];
  }


}
