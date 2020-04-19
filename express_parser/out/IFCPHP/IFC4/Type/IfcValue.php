<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcValue extends IFC\Common{

	static public $elementName = 'IFCVALUE';

	static public $translationFR = 'Valeur';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcValue = SELECT
(IfcDerivedMeasureValue
,IfcMeasureValue
,IfcSimpleValue);
END_TYPE;
*/
