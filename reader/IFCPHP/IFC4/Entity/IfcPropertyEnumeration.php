<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPropertyEnumeration extends IfcPropertyAbstraction{

	static public $translationFR = 'Propriété à valeurs énumérées';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'EnumerationValues',
			'class' => 'Type\IfcValue',
			'type' => 'array',
			'optional' => false,
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
ENTITY IfcPropertyEnumeration
SUBTYPE OF (IfcPropertyAbstraction);
Name : IfcLabel;
EnumerationValues : LIST [1:?] OF UNIQUE IfcValue;
Unit : OPTIONAL IfcUnit;
UNIQUE
UR1 : Name;
WHERE
WR01 : SIZEOF(QUERY(temp <* SELF.EnumerationValues |
NOT(TYPEOF(SELF.EnumerationValues[1]) = TYPEOF(temp))
)) = 0;
END_ENTITY;
*/
