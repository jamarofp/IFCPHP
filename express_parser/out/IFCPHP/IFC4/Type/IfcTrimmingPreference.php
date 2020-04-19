<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTrimmingPreference extends IFC\Common{

	static public $elementName = 'IFCTRIMMINGPREFERENCE';

	static public $translationFR = 'Préférence de rognage';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CARTESIAN',
			'PARAMETER',
			'UNSPECIFIED',
		],
	]];
}
/* DEFINITION
TYPE IfcTrimmingPreference = ENUMERATION OF
(CARTESIAN
,PARAMETER
,UNSPECIFIED);
END_TYPE;
*/
