<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPropertyListValue extends IfcSimpleProperty{

	static public $elementName = 'IFCPROPERTYLISTVALUE';

	static public $translationFR = 'Propriété à liste de valeurs';

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
			'name' => 'ListValues',
			'class' => 'Type\IfcValue',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'Unit',
			'class' => 'Type\IfcUnit',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcPropertyListValue
SUBTYPE OF (IfcSimpleProperty);
ListValues : OPTIONAL LIST [1:?] OF IfcValue;
Unit : OPTIONAL IfcUnit;
WHERE
WR31 : SIZEOF(QUERY(temp <* SELF.ListValues |
NOT(TYPEOF(SELF.ListValues[1]) = TYPEOF(temp))
)) = 0;
END_ENTITY;
*/
