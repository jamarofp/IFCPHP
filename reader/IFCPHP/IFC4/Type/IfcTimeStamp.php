<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTimeStamp extends IFC\Common{

	static public $translationFR = 'Horodatage';

	static public $params = [[
		'class' => 'Base\Integer',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcTimeStamp = INTEGER;
END_TYPE;
*/
