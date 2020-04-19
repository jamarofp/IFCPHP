<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcUnit extends IFC\Common{

	static public $elementName = 'IFCUNIT';

	static public $translationFR = 'Unité';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcUnit = SELECT
(IfcDerivedUnit
,IfcMonetaryUnit
,IfcNamedUnit);
END_TYPE;
*/
