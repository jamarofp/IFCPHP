<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcStyleAssignmentSelect extends IFC\Common{

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcStyleAssignmentSelect = SELECT
(IfcPresentationStyle
,IfcPresentationStyleAssignment);
END_TYPE;
*/
