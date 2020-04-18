<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcOutletTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de prise';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'AUDIOVISUALOUTLET',
			'COMMUNICATIONSOUTLET',
			'POWEROUTLET',
			'DATAOUTLET',
			'TELEPHONEOUTLET',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcOutletTypeEnum = ENUMERATION OF
(AUDIOVISUALOUTLET
,COMMUNICATIONSOUTLET
,POWEROUTLET
,DATAOUTLET
,TELEPHONEOUTLET
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
