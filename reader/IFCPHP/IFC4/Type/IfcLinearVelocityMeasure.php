<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLinearVelocityMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de vitesse linéaire';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcLinearVelocityMeasure = REAL;
END_TYPE;
*/
