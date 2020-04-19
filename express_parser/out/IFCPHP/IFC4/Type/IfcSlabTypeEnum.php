<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSlabTypeEnum extends IFC\Common{

	static public $elementName = 'IFCSLABTYPEENUM';

	static public $translationFR = 'Enumération des types de dalle';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'FLOOR',
			'ROOF',
			'LANDING',
			'BASESLAB',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcSlabTypeEnum = ENUMERATION OF
(FLOOR
,ROOF
,LANDING
,BASESLAB
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
