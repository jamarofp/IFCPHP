<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcGridTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de grille';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'RECTANGULAR',
			'RADIAL',
			'TRIANGULAR',
			'IRREGULAR',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcGridTypeEnum = ENUMERATION OF
(RECTANGULAR
,RADIAL
,TRIANGULAR
,IRREGULAR
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
