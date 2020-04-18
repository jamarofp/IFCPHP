<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPhysicalComplexQuantity extends IfcPhysicalQuantity{

	static public $translationFR = 'Quantité physique complexe';

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
			'name' => 'HasQuantities',
			'class' => 'Entity\IfcPhysicalQuantity',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'Discrimination',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Quality',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Usage',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcPhysicalComplexQuantity
SUBTYPE OF (IfcPhysicalQuantity);
HasQuantities : SET [1:?] OF IfcPhysicalQuantity;
Discrimination : IfcLabel;
Quality : OPTIONAL IfcLabel;
Usage : OPTIONAL IfcLabel;
WHERE
NoSelfReference : SIZEOF(QUERY(temp <* HasQuantities | SELF :=: temp)) = 0;
UniqueQuantityNames : IfcUniqueQuantityNames(HasQuantities);
END_ENTITY;
*/
