<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcFootingTypeEnum extends IFC\Common{

	static public $elementName = 'IFCFOOTINGTYPEENUM';

	static public $translationFR = 'Enumération des types de fondation';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CAISSON_FOUNDATION',
			'FOOTING_BEAM',
			'PAD_FOOTING',
			'PILE_CAP',
			'STRIP_FOOTING',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcFootingTypeEnum = ENUMERATION OF
(CAISSON_FOUNDATION
,FOOTING_BEAM
,PAD_FOOTING
,PILE_CAP
,STRIP_FOOTING
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
