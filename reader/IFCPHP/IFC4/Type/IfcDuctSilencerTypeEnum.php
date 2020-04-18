<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDuctSilencerTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types de silencieux circulaire';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'FLATOVAL',
			'RECTANGULAR',
			'ROUND',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcDuctSilencerTypeEnum = ENUMERATION OF
(FLATOVAL
,RECTANGULAR
,ROUND
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
