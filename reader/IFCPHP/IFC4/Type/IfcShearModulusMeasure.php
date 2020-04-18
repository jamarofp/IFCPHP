<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcShearModulusMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de module de rigidité';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcShearModulusMeasure = REAL;
END_TYPE;
*/
