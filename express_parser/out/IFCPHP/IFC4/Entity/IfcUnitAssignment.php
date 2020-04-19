<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcUnitAssignment extends IFC\Common{

	static public $elementName = 'IFCUNITASSIGNMENT';

	static public $translationFR = 'Assignation d\'unité';

	static public $params = [
		[
			'name' => 'Units',
			'class' => 'Type\IfcUnit',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcUnitAssignment;
Units : SET [1:?] OF IfcUnit;
WHERE
WR01 : IfcCorrectUnitAssignment(Units);
END_ENTITY;
*/
