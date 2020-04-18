<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcQuantityWeight extends IfcPhysicalSimpleQuantity{

	static public $translationFR = 'Quantité de poids';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
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
			'name' => 'Unit',
			'class' => 'Entity\IfcNamedUnit',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'WeightValue',
			'class' => 'Type\IfcMassMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Formula',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcQuantityWeight
SUBTYPE OF (IfcPhysicalSimpleQuantity);
WeightValue : IfcMassMeasure;
Formula : OPTIONAL IfcLabel;
WHERE
WR21 : NOT(EXISTS(SELF\IfcPhysicalSimpleQuantity.Unit)) OR
(SELF\IfcPhysicalSimpleQuantity.Unit.UnitType = IfcUnitEnum.MASSUNIT);
WR22 : WeightValue >= 0.;
END_ENTITY;
*/
