<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCondenserTypeEnum extends IFC\Common{

	static public $elementName = 'IFCCONDENSERTYPEENUM';

	static public $translationFR = 'Énumération des types de condenseur';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'AIRCOOLED',
			'EVAPORATIVECOOLED',
			'WATERCOOLED',
			'WATERCOOLEDBRAZEDPLATE',
			'WATERCOOLEDSHELLCOIL',
			'WATERCOOLEDSHELLTUBE',
			'WATERCOOLEDTUBEINTUBE',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcCondenserTypeEnum = ENUMERATION OF
(AIRCOOLED
,EVAPORATIVECOOLED
,WATERCOOLED
,WATERCOOLEDBRAZEDPLATE
,WATERCOOLEDSHELLCOIL
,WATERCOOLEDSHELLTUBE
,WATERCOOLEDTUBEINTUBE
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
