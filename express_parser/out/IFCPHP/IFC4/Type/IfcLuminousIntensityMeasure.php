<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLuminousIntensityMeasure extends IFC\Common{

	static public $elementName = 'IFCLUMINOUSINTENSITYMEASURE';

	static public $translationFR = 'Mesure de l\'intensité lumineuse';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcLuminousIntensityMeasure = REAL;
END_TYPE;
*/
