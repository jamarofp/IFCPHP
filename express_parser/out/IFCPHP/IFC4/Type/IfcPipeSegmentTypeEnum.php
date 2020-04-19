<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPipeSegmentTypeEnum extends IFC\Common{

	static public $elementName = 'IFCPIPESEGMENTTYPEENUM';

	static public $translationFR = 'Enumération des types de tronçon de tuyauterie';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CULVERT',
			'FLEXIBLESEGMENT',
			'RIGIDSEGMENT',
			'GUTTER',
			'SPOOL',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcPipeSegmentTypeEnum = ENUMERATION OF
(CULVERT
,FLEXIBLESEGMENT
,RIGIDSEGMENT
,GUTTER
,SPOOL
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
