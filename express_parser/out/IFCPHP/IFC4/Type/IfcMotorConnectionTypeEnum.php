<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcMotorConnectionTypeEnum extends IFC\Common{

	static public $elementName = 'IFCMOTORCONNECTIONTYPEENUM';

	static public $translationFR = 'Enumération des types de connection du moteur';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'BELTDRIVE',
			'COUPLING',
			'DIRECTDRIVE',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcMotorConnectionTypeEnum = ENUMERATION OF
(BELTDRIVE
,COUPLING
,DIRECTDRIVE
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
