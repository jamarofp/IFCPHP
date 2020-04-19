<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcBooleanOperand extends IFC\Common{

	static public $elementName = 'IFCBOOLEANOPERAND';

	static public $translationFR = 'Opérande booléen';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcBooleanOperand = SELECT
(IfcBooleanResult
,IfcCsgPrimitive3D
,IfcHalfSpaceSolid
,IfcSolidModel);
END_TYPE;
*/
