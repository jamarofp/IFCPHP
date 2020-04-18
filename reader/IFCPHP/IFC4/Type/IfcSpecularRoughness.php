<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSpecularRoughness extends IFC\Common{

	static public $translationFR = 'Rugosité pour le spéculaire';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcSpecularRoughness = REAL;
WHERE
WR1 : {0.0 <= SELF <= 1.0};
END_TYPE;
*/
