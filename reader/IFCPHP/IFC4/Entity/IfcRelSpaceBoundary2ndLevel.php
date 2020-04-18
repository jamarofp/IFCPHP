<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelSpaceBoundary2ndLevel extends IfcRelSpaceBoundary1stLevel{

	static public $translationFR = 'Limites d\'espace de deuxième niveau';

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
			'name' => 'RelatingSpace',
			'class' => 'Type\IfcSpaceBoundarySelect',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatedBuildingElement',
			'class' => 'Entity\IfcElement',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ConnectionGeometry',
			'class' => 'Entity\IfcConnectionGeometry',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PhysicalOrVirtualBoundary',
			'class' => 'Type\IfcPhysicalOrVirtualEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'InternalOrExternalBoundary',
			'class' => 'Type\IfcInternalOrExternalEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ParentBoundary',
			'class' => 'Entity\IfcRelSpaceBoundary1stLevel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CorrespondingBoundary',
			'class' => 'Entity\IfcRelSpaceBoundary2ndLevel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcRelSpaceBoundary2ndLevel
SUBTYPE OF (IfcRelSpaceBoundary1stLevel);
CorrespondingBoundary : OPTIONAL IfcRelSpaceBoundary2ndLevel;
INVERSE
Corresponds : SET [0:1] OF IfcRelSpaceBoundary2ndLevel FOR CorrespondingBoundary;
END_ENTITY;
*/
