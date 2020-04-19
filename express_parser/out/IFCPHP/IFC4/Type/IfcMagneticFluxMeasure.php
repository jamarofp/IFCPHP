<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcMagneticFluxMeasure extends IFC\Common{

	static public $elementName = 'IFCMAGNETICFLUXMEASURE';

	static public $translationFR = 'Mesure de flux magnétique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcMagneticFluxMeasure = REAL;
END_TYPE;
*/
