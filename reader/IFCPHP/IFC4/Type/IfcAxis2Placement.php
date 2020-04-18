<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcAxis2Placement extends IFC\Common{

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcAxis2Placement = SELECT
(IfcAxis2Placement2D
,IfcAxis2Placement3D);
END_TYPE;
*/
