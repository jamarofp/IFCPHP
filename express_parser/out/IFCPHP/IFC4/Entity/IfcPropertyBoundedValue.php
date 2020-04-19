<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPropertyBoundedValue extends IfcSimpleProperty{

	static public $elementName = 'IFCPROPERTYBOUNDEDVALUE';

	static public $translationFR = 'Propriété à valeur bornée';

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
			'name' => 'UpperBoundValue',
			'class' => 'Type\IfcValue',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LowerBoundValue',
			'class' => 'Type\IfcValue',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Unit',
			'class' => 'Type\IfcUnit',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'SetPointValue',
			'class' => 'Type\IfcValue',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcPropertyBoundedValue
SUBTYPE OF (IfcSimpleProperty);
UpperBoundValue : OPTIONAL IfcValue;
LowerBoundValue : OPTIONAL IfcValue;
Unit : OPTIONAL IfcUnit;
SetPointValue : OPTIONAL IfcValue;
WHERE
SameUnitUpperLower : NOT(EXISTS(UpperBoundValue)) OR NOT(EXISTS(LowerBoundValue)) OR
(TYPEOF(UpperBoundValue) = TYPEOF(LowerBoundValue));
SameUnitUpperSet : NOT(EXISTS(UpperBoundValue)) OR NOT(EXISTS(SetPointValue)) OR
(TYPEOF(UpperBoundValue) = TYPEOF(SetPointValue));
SameUnitLowerSet : NOT(EXISTS(LowerBoundValue)) OR NOT(EXISTS(SetPointValue)) OR
(TYPEOF(LowerBoundValue) = TYPEOF(SetPointValue));
END_ENTITY;
*/
