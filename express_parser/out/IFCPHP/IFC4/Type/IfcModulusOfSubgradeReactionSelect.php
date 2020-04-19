<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcModulusOfSubgradeReactionSelect extends IFC\Common{

	static public $elementName = 'IFCMODULUSOFSUBGRADEREACTIONSELECT';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcModulusOfSubgradeReactionSelect = SELECT
(IfcBoolean
,IfcModulusOfSubgradeReactionMeasure);
END_TYPE;
*/
