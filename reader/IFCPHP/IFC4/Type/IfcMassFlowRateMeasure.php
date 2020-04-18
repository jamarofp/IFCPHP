<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcMassFlowRateMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de débit massique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcMassFlowRateMeasure = REAL;
END_TYPE;
*/
