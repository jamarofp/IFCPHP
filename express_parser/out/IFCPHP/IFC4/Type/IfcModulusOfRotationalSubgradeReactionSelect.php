<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcModulusOfRotationalSubgradeReactionSelect extends IFC\Common{

	static public $elementName = 'IFCMODULUSOFROTATIONALSUBGRADEREACTIONSELECT';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcModulusOfRotationalSubgradeReactionSelect = SELECT
(IfcBoolean
,IfcModulusOfRotationalSubgradeReactionMeasure);
END_TYPE;
*/
