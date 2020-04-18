<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDynamicViscosityMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de viscosité dynamique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcDynamicViscosityMeasure = REAL;
END_TYPE;
*/
