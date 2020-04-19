<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcMassDensityMeasure extends IFC\Common{

	static public $elementName = 'IFCMASSDENSITYMEASURE';

	static public $translationFR = 'Mesure de masse volumique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcMassDensityMeasure = REAL;
END_TYPE;
*/
