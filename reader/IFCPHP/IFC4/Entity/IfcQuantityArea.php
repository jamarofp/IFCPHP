<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcQuantityArea extends IfcPhysicalSimpleQuantity{

	static public $translationFR = 'Quantité de surface';

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
			'name' => 'AreaValue',
			'class' => 'Type\IfcAreaMeasure',
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
ENTITY IfcQuantityArea
SUBTYPE OF (IfcPhysicalSimpleQuantity);
AreaValue : IfcAreaMeasure;
Formula : OPTIONAL IfcLabel;
WHERE
WR21 : NOT(EXISTS(SELF\IfcPhysicalSimpleQuantity.Unit)) OR
(SELF\IfcPhysicalSimpleQuantity.Unit.UnitType = IfcUnitEnum.AREAUNIT);
WR22 : AreaValue >= 0.;
END_ENTITY;
*/
