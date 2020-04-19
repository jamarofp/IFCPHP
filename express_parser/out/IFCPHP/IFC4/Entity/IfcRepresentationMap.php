<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRepresentationMap extends IFC\Common{

	static public $elementName = 'IFCREPRESENTATIONMAP';

	static public $params = [
		[
			'name' => 'MappingOrigin',
			'class' => 'Type\IfcAxis2Placement',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'MappedRepresentation',
			'class' => 'Entity\IfcRepresentation',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRepresentationMap;
MappingOrigin : IfcAxis2Placement;
MappedRepresentation : IfcRepresentation;
INVERSE
HasShapeAspects : SET [0:?] OF IfcShapeAspect FOR PartOfProductDefinitionShape;
MapUsage : SET [0:?] OF IfcMappedItem FOR MappingSource;
WHERE
ApplicableMappedRepr : 'IFC4.IFCSHAPEMODEL' IN TYPEOF(MappedRepresentation);
END_ENTITY;
*/
