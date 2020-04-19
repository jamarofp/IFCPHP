<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcQuantityCount extends IfcPhysicalSimpleQuantity{

	static public $elementName = 'IFCQUANTITYCOUNT';

	static public $translationFR = 'Quantité de comptage';

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
			'name' => 'CountValue',
			'class' => 'Type\IfcCountMeasure',
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
ENTITY IfcQuantityCount
SUBTYPE OF (IfcPhysicalSimpleQuantity);
CountValue : IfcCountMeasure;
Formula : OPTIONAL IfcLabel;
WHERE
WR21 : CountValue >= 0.;
END_ENTITY;
*/
