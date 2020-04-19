<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcVolumeMeasure extends IFC\Common{

	static public $elementName = 'IFCVOLUMEMEASURE';

	static public $translationFR = 'Mesure de volume';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcVolumeMeasure = REAL;
END_TYPE;
*/
