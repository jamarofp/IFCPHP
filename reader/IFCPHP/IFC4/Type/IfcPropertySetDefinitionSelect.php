<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPropertySetDefinitionSelect extends IFC\Common{

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcPropertySetDefinitionSelect = SELECT
(IfcPropertySetDefinition
,IfcPropertySetDefinitionSet);
END_TYPE;
*/
