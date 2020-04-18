<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMappedItem extends IfcRepresentationItem{

	static public $params = [
		[
			'name' => 'MappingSource',
			'class' => 'Entity\IfcRepresentationMap',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'MappingTarget',
			'class' => 'Entity\IfcCartesianTransformationOperator',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcMappedItem
SUBTYPE OF (IfcRepresentationItem);
MappingSource : IfcRepresentationMap;
MappingTarget : IfcCartesianTransformationOperator;
END_ENTITY;
*/
