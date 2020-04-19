<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcHeatFluxDensityMeasure extends IFC\Common{

	static public $elementName = 'IFCHEATFLUXDENSITYMEASURE';

	static public $translationFR = 'Mesure de densité de flux de chaleur';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcHeatFluxDensityMeasure = REAL;
END_TYPE;
*/
