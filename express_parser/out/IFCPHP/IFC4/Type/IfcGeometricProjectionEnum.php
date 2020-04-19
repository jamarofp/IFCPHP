<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcGeometricProjectionEnum extends IFC\Common{

	static public $elementName = 'IFCGEOMETRICPROJECTIONENUM';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'GRAPH_VIEW',
			'SKETCH_VIEW',
			'MODEL_VIEW',
			'PLAN_VIEW',
			'REFLECTED_PLAN_VIEW',
			'SECTION_VIEW',
			'ELEVATION_VIEW',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcGeometricProjectionEnum = ENUMERATION OF
(GRAPH_VIEW
,SKETCH_VIEW
,MODEL_VIEW
,PLAN_VIEW
,REFLECTED_PLAN_VIEW
,SECTION_VIEW
,ELEVATION_VIEW
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
