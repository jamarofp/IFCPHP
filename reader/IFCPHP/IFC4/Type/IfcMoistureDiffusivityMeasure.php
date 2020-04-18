<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcMoistureDiffusivityMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de la diffusion d\'humidité';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcMoistureDiffusivityMeasure = REAL;
END_TYPE;
*/
