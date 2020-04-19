<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcEngineTypeEnum extends IFC\Common{

	static public $elementName = 'IFCENGINETYPEENUM';

	static public $translationFR = 'Énumération des types de moteur';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'EXTERNALCOMBUSTION',
			'INTERNALCOMBUSTION',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcEngineTypeEnum = ENUMERATION OF
(EXTERNALCOMBUSTION
,INTERNALCOMBUSTION
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
