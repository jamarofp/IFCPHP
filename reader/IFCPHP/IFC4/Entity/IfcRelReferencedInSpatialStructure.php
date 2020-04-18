<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelReferencedInSpatialStructure extends IfcRelConnects{

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
			'name' => 'RelatedElements',
			'class' => 'Entity\IfcProduct',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'RelatingStructure',
			'class' => 'Entity\IfcSpatialElement',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRelReferencedInSpatialStructure
SUBTYPE OF (IfcRelConnects);
RelatedElements : SET [1:?] OF IfcProduct;
RelatingStructure : IfcSpatialElement;
WHERE
WR31 : SIZEOF(QUERY(temp <* RelatedElements | 'IFC4.IFCSPATIALSTRUCTUREELEMENT' IN TYPEOF(temp))) = 0;
END_ENTITY;
*/
