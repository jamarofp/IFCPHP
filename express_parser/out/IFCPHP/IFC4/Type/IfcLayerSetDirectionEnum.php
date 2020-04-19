<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLayerSetDirectionEnum extends IFC\Common{

	static public $elementName = 'IFCLAYERSETDIRECTIONENUM';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'AXIS',
			'AXIS',
			'AXIS',
		],
	]];
}
/* DEFINITION
TYPE IfcLayerSetDirectionEnum = ENUMERATION OF
(AXIS1
,AXIS2
,AXIS3);
END_TYPE;
*/
