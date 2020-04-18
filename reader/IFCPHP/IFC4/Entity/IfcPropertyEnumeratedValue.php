<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPropertyEnumeratedValue extends IfcSimpleProperty{

	static public $translationFR = 'Propriété à valeur issue d\'un énumération';

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
			'name' => 'EnumerationValues',
			'class' => 'Type\IfcValue',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'EnumerationReference',
			'class' => 'Entity\IfcPropertyEnumeration',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcPropertyEnumeratedValue
SUBTYPE OF (IfcSimpleProperty);
EnumerationValues : OPTIONAL LIST [1:?] OF IfcValue;
EnumerationReference : OPTIONAL IfcPropertyEnumeration;
WHERE
WR21 : NOT(EXISTS(EnumerationReference))
OR  NOT(EXISTS(EnumerationValues))
OR  (SIZEOF(QUERY(temp <* EnumerationValues |
temp IN EnumerationReference.EnumerationValues))
= SIZEOF(EnumerationValues));
END_ENTITY;
*/
