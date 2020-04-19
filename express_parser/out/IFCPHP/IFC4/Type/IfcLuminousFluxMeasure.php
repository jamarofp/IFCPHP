<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLuminousFluxMeasure extends IFC\Common{

	static public $elementName = 'IFCLUMINOUSFLUXMEASURE';

	static public $translationFR = 'Mesure du flux lumineux';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcLuminousFluxMeasure = REAL;
END_TYPE;
*/
