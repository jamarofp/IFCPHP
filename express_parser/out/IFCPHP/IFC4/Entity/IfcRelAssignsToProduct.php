<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelAssignsToProduct extends IfcRelAssigns{

	static public $elementName = 'IFCRELASSIGNSTOPRODUCT';

	static public $translationFR = 'Assignation à produit';

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
			'name' => 'RelatedObjects',
			'class' => 'Entity\IfcObjectDefinition',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'RelatedObjectsType',
			'class' => 'Type\IfcObjectTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RelatingProduct',
			'class' => 'Type\IfcProductSelect',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRelAssignsToProduct
SUBTYPE OF (IfcRelAssigns);
RelatingProduct : IfcProductSelect;
WHERE
NoSelfReference : SIZEOF(QUERY(Temp <* SELF\IfcRelAssigns.RelatedObjects | RelatingProduct :=: Temp)) = 0;
END_ENTITY;
*/
