<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcFanTypeEnum extends IFC\Common{

	static public $elementName = 'IFCFANTYPEENUM';

	static public $translationFR = 'Enumération des types de ventilateur';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CENTRIFUGALFORWARDCURVED',
			'CENTRIFUGALRADIAL',
			'CENTRIFUGALBACKWARDINCLINEDCURVED',
			'CENTRIFUGALAIRFOIL',
			'TUBEAXIAL',
			'VANEAXIAL',
			'PROPELLORAXIAL',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcFanTypeEnum = ENUMERATION OF
(CENTRIFUGALFORWARDCURVED
,CENTRIFUGALRADIAL
,CENTRIFUGALBACKWARDINCLINEDCURVED
,CENTRIFUGALAIRFOIL
,TUBEAXIAL
,VANEAXIAL
,PROPELLORAXIAL
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
