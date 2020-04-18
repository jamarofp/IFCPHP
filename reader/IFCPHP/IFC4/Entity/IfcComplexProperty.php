<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcComplexProperty extends IfcProperty{

	static public $translationFR = 'Propriété complexe';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Description',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'UsageName',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'HasProperties',
			'class' => 'Entity\IfcProperty',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcComplexProperty
SUBTYPE OF (IfcProperty);
UsageName : IfcIdentifier;
HasProperties : SET [1:?] OF IfcProperty;
WHERE
WR21 : SIZEOF(QUERY(temp <* HasProperties | SELF :=: temp)) = 0;
WR22 : IfcUniquePropertyName(HasProperties);
END_ENTITY;
*/
