<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcModulusOfRotationalSubgradeReactionMeasure extends IFC\Common{

	static public $elementName = 'IFCMODULUSOFROTATIONALSUBGRADEREACTIONMEASURE';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcModulusOfRotationalSubgradeReactionMeasure = REAL;
END_TYPE;
*/
