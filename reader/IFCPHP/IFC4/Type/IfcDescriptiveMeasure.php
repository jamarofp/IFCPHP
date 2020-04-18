<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDescriptiveMeasure extends IFC\Common{

	static public $translationFR = 'Mesure descriptive';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcDescriptiveMeasure = STRING;
END_TYPE;
*/
