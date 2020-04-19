<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcMagneticFluxDensityMeasure extends IFC\Common{

	static public $elementName = 'IFCMAGNETICFLUXDENSITYMEASURE';

	static public $translationFR = 'Mesure de la densité de flux magnétique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcMagneticFluxDensityMeasure = REAL;
END_TYPE;
*/
