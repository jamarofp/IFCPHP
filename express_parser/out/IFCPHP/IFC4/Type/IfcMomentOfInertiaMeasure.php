<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcMomentOfInertiaMeasure extends IFC\Common{

	static public $elementName = 'IFCMOMENTOFINERTIAMEASURE';

	static public $translationFR = 'Mesure du moment d\'inertie';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcMomentOfInertiaMeasure = REAL;
END_TYPE;
*/
