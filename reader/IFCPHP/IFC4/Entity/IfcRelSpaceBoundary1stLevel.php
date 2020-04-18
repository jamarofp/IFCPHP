<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelSpaceBoundary1stLevel extends IfcRelSpaceBoundary{

	static public $translationFR = 'Limites d\'espace de premier niveau';

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
	];
}
/* SUPERTYPE
	IfcRelSpaceBoundary2ndLevel
*/


/* DEFINITION
ENTITY IfcRelSpaceBoundary1stLevel
SUPERTYPE OF (ONEOF
(IfcRelSpaceBoundary2ndLevel))
SUBTYPE OF (IfcRelSpaceBoundary);
ParentBoundary : OPTIONAL IfcRelSpaceBoundary1stLevel;
INVERSE
InnerBoundaries : SET [0:?] OF IfcRelSpaceBoundary1stLevel FOR ParentBoundary;
END_ENTITY;
*/
