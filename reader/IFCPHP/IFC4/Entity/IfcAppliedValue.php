<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcAppliedValue extends IFC\Common{

	static public $translationFR = 'Valeur appliquée';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Description',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'AppliedValue',
			'class' => 'Type\IfcAppliedValueSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'UnitBasis',
			'class' => 'Entity\IfcMeasureWithUnit',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ApplicableDate',
			'class' => 'Type\IfcDate',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'FixedUntilDate',
			'class' => 'Type\IfcDate',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Category',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Condition',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ArithmeticOperator',
			'class' => 'Type\IfcArithmeticOperatorEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Components',
			'class' => 'Entity\IfcAppliedValue',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
	];
}
/* SUPERTYPE
	IfcCostValue
*/


/* DEFINITION
ENTITY IfcAppliedValue
SUPERTYPE OF (ONEOF
(IfcCostValue));
Name : OPTIONAL IfcLabel;
Description : OPTIONAL IfcText;
AppliedValue : OPTIONAL IfcAppliedValueSelect;
UnitBasis : OPTIONAL IfcMeasureWithUnit;
ApplicableDate : OPTIONAL IfcDate;
FixedUntilDate : OPTIONAL IfcDate;
Category : OPTIONAL IfcLabel;
Condition : OPTIONAL IfcLabel;
ArithmeticOperator : OPTIONAL IfcArithmeticOperatorEnum;
Components : OPTIONAL LIST [1:?] OF IfcAppliedValue;
INVERSE
HasExternalReference : SET [0:?] OF IfcExternalReferenceRelationship FOR RelatedResourceObjects;
END_ENTITY;
*/
