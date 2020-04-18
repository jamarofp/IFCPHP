<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcVolumetricFlowRateMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de débit volumique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcVolumetricFlowRateMeasure = REAL;
END_TYPE;
*/
