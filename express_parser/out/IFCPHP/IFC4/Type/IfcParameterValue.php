<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcParameterValue extends IFC\Common{

	static public $elementName = 'IFCPARAMETERVALUE';

	static public $translationFR = 'Valeur de paramètre';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcParameterValue = REAL;
END_TYPE;
*/
