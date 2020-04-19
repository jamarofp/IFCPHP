<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcModulusOfLinearSubgradeReactionMeasure extends IFC\Common{

	static public $elementName = 'IFCMODULUSOFLINEARSUBGRADEREACTIONMEASURE';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcModulusOfLinearSubgradeReactionMeasure = REAL;
END_TYPE;
*/
