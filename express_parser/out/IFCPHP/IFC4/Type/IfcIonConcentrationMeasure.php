<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcIonConcentrationMeasure extends IFC\Common{

	static public $elementName = 'IFCIONCONCENTRATIONMEASURE';

	static public $translationFR = 'Mesure de concentration en ions';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcIonConcentrationMeasure = REAL;
END_TYPE;
*/
