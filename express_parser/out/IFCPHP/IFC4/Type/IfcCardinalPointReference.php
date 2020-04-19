<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCardinalPointReference extends IFC\Common{

	static public $elementName = 'IFCCARDINALPOINTREFERENCE';

	static public $translationFR = 'Référence à l\'index d\'un point significatif d\'un profi';

	static public $params = [[
		'class' => 'Base\Integer',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcCardinalPointReference = INTEGER;
WHERE
GreaterThanZero : SELF > 0;
END_TYPE;
*/
