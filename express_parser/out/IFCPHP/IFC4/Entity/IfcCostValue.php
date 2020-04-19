<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCostValue extends IfcAppliedValue{

	static public $elementName = 'IFCCOSTVALUE';

	static public $translationFR = 'Valeur de coût';

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
/* DEFINITION
ENTITY IfcCostValue
SUBTYPE OF (IfcAppliedValue);
END_ENTITY;
*/
