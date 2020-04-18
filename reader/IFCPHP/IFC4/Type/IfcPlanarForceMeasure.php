<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPlanarForceMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de force par unité de surface';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcPlanarForceMeasure = REAL;
END_TYPE;
*/
