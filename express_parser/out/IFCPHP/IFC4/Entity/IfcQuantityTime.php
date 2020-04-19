<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcQuantityTime extends IfcPhysicalSimpleQuantity{

	static public $elementName = 'IFCQUANTITYTIME';

	static public $translationFR = 'Quantité de durée';

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
			'name' => 'TimeValue',
			'class' => 'Type\IfcTimeMeasure',
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
ENTITY IfcQuantityTime
SUBTYPE OF (IfcPhysicalSimpleQuantity);
TimeValue : IfcTimeMeasure;
Formula : OPTIONAL IfcLabel;
WHERE
WR21 : NOT(EXISTS(SELF\IfcPhysicalSimpleQuantity.Unit)) OR
(SELF\IfcPhysicalSimpleQuantity.Unit.UnitType = IfcUnitEnum.TIMEUNIT);
WR22 : TimeValue >= 0.;
END_ENTITY;
*/
