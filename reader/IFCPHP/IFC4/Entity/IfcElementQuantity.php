<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcElementQuantity extends IfcQuantitySet{

	static public $translationFR = 'Quantité d\'élément';

	static public $params = [
		[
			'name' => 'GlobalId',
			'class' => 'Type\IfcGloballyUniqueId',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'OwnerHistory',
			'class' => 'Entity\IfcOwnerHistory',
			'type' => 'object',
			'optional' => true,
		],
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
			'name' => 'MethodOfMeasurement',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Quantities',
			'class' => 'Entity\IfcPhysicalQuantity',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcElementQuantity
SUBTYPE OF (IfcQuantitySet);
MethodOfMeasurement : OPTIONAL IfcLabel;
Quantities : SET [1:?] OF IfcPhysicalQuantity;
WHERE
UniqueQuantityNames : IfcUniqueQuantityNames(Quantities);
END_ENTITY;
*/
