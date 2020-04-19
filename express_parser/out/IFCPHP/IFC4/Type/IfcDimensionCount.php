<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDimensionCount extends IFC\Common{

	static public $elementName = 'IFCDIMENSIONCOUNT';

	static public $translationFR = 'Dimensionalité';

	static public $params = [[
		'class' => 'Base\Integer',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcDimensionCount = INTEGER;
WHERE
WR1 : { 0 < SELF <= 3 };
END_TYPE;
*/
