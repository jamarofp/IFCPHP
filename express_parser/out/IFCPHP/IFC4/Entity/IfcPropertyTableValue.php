<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPropertyTableValue extends IfcSimpleProperty{

	static public $elementName = 'IFCPROPERTYTABLEVALUE';

	static public $translationFR = 'Propriété à valeurs tabulaires';

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
			'name' => 'DefiningValues',
			'class' => 'Type\IfcValue',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'DefinedValues',
			'class' => 'Type\IfcValue',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'Expression',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'DefiningUnit',
			'class' => 'Type\IfcUnit',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'DefinedUnit',
			'class' => 'Type\IfcUnit',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CurveInterpolation',
			'class' => 'Type\IfcCurveInterpolationEnum',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcPropertyTableValue
SUBTYPE OF (IfcSimpleProperty);
DefiningValues : OPTIONAL LIST [1:?] OF UNIQUE IfcValue;
DefinedValues : OPTIONAL LIST [1:?] OF IfcValue;
Expression : OPTIONAL IfcText;
DefiningUnit : OPTIONAL IfcUnit;
DefinedUnit : OPTIONAL IfcUnit;
CurveInterpolation : OPTIONAL IfcCurveInterpolationEnum;
WHERE
WR21 : (NOT(EXISTS(DefiningValues)) AND NOT(EXISTS(DefinedValues)))
OR (SIZEOF(DefiningValues) = SIZEOF(DefinedValues));
WR22 : NOT(EXISTS(DefiningValues)) OR
(SIZEOF(QUERY(temp <* SELF.DefiningValues | TYPEOF(temp) <> TYPEOF(SELF.DefiningValues[1])
)) = 0);
WR23 : NOT(EXISTS(DefinedValues)) OR
(SIZEOF(QUERY(temp <* SELF.DefinedValues | TYPEOF(temp) <> TYPEOF(SELF.DefinedValues[1])
)) = 0);
END_ENTITY;
*/
