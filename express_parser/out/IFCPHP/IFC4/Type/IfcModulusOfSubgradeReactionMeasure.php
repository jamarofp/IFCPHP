<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcModulusOfSubgradeReactionMeasure extends IFC\Common{

	static public $elementName = 'IFCMODULUSOFSUBGRADEREACTIONMEASURE';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcModulusOfSubgradeReactionMeasure = REAL;
END_TYPE;
*/
