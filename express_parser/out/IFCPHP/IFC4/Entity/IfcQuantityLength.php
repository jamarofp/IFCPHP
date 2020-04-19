<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcQuantityLength extends IfcPhysicalSimpleQuantity{

	static public $elementName = 'IFCQUANTITYLENGTH';

	static public $translationFR = 'Quantité de longueur';

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
			'name' => 'LengthValue',
			'class' => 'Type\IfcLengthMeasure',
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
ENTITY IfcQuantityLength
SUBTYPE OF (IfcPhysicalSimpleQuantity);
LengthValue : IfcLengthMeasure;
Formula : OPTIONAL IfcLabel;
WHERE
WR21 : NOT(EXISTS(SELF\IfcPhysicalSimpleQuantity.Unit)) OR
(SELF\IfcPhysicalSimpleQuantity.Unit.UnitType = IfcUnitEnum.LENGTHUNIT);
WR22 : LengthValue >= 0.;
END_ENTITY;
*/
