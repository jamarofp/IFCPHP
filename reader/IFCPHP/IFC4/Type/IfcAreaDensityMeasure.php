<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcAreaDensityMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de densité d\'aire';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcAreaDensityMeasure = REAL;
END_TYPE;
*/
