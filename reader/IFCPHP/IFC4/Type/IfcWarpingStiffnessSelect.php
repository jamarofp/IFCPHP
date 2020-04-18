<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcWarpingStiffnessSelect extends IFC\Common{

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcWarpingStiffnessSelect = SELECT
(IfcBoolean
,IfcWarpingMomentMeasure);
END_TYPE;
*/
