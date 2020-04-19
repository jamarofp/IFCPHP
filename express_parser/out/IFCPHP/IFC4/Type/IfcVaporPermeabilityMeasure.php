<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcVaporPermeabilityMeasure extends IFC\Common{

	static public $elementName = 'IFCVAPORPERMEABILITYMEASURE';

	static public $translationFR = 'Mesure de perméabilité à la vapeur';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcVaporPermeabilityMeasure = REAL;
END_TYPE;
*/
