<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcStructuralSurfaceActivityTypeEnum extends IFC\Common{

	static public $elementName = 'IFCSTRUCTURALSURFACEACTIVITYTYPEENUM';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CONST',
			'BILINEAR',
			'DISCRETE',
			'ISOCONTOUR',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcStructuralSurfaceActivityTypeEnum = ENUMERATION OF
(CONST
,BILINEAR
,DISCRETE
,ISOCONTOUR
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
