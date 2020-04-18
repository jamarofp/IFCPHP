<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcAirTerminalTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types d\'entrée/sortie d\'air';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'DIFFUSER',
			'GRILLE',
			'LOUVRE',
			'REGISTER',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcAirTerminalTypeEnum = ENUMERATION OF
(DIFFUSER
,GRILLE
,LOUVRE
,REGISTER
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
