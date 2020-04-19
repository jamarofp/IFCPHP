<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPhysicalSimpleQuantity extends IfcPhysicalQuantity{

	static public $elementName = 'IFCPHYSICALSIMPLEQUANTITY';

	static public $translationFR = 'Quantité physique simple';

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
	];
}
/* SUPERTYPE
	IfcQuantityArea
	IfcQuantityCount
	IfcQuantityLength
	IfcQuantityTime
	IfcQuantityVolume
	IfcQuantityWeight
*/


/* DEFINITION
ENTITY IfcPhysicalSimpleQuantity
ABSTRACT SUPERTYPE OF (ONEOF
(IfcQuantityArea
,IfcQuantityCount
,IfcQuantityLength
,IfcQuantityTime
,IfcQuantityVolume
,IfcQuantityWeight))
SUBTYPE OF (IfcPhysicalQuantity);
Unit : OPTIONAL IfcNamedUnit;
END_ENTITY;
*/
