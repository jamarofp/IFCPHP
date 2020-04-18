<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcAngularVelocityMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de vélocité angulaire';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcAngularVelocityMeasure = REAL;
END_TYPE;
*/
