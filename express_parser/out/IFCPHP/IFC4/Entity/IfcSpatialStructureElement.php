<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSpatialStructureElement extends IfcSpatialElement{

	static public $elementName = 'IFCSPATIALSTRUCTUREELEMENT';

	static public $translationFR = 'Elément de la structure spatiale';

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
			'name' => 'ObjectType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ObjectPlacement',
			'class' => 'Entity\IfcObjectPlacement',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Representation',
			'class' => 'Entity\IfcProductRepresentation',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LongName',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CompositionType',
			'class' => 'Type\IfcElementCompositionEnum',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcBuilding
	IfcBuildingStorey
	IfcSite
	IfcSpace
*/


/* DEFINITION
ENTITY IfcSpatialStructureElement
ABSTRACT SUPERTYPE OF (ONEOF
(IfcBuilding
,IfcBuildingStorey
,IfcSite
,IfcSpace))
SUBTYPE OF (IfcSpatialElement);
CompositionType : OPTIONAL IfcElementCompositionEnum;
WHERE
WR41 : (HIINDEX(SELF\IfcObjectDefinition.Decomposes) = 1)
AND
('IFC4.IFCRELAGGREGATES' IN TYPEOF(SELF\IfcObjectDefinition.Decomposes[1]))
AND
(('IFC4.IFCPROJECT' IN TYPEOF (SELF\IfcObjectDefinition.Decomposes[1].RelatingObject)) OR
('IFC4.IFCSPATIALSTRUCTUREELEMENT' IN TYPEOF (SELF\IfcObjectDefinition.Decomposes[1].RelatingObject))
);
END_ENTITY;
*/
