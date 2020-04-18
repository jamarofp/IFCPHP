<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelSpaceBoundary extends IfcRelConnects{

	static public $translationFR = 'Limite d\'espace';

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
	];
}
/* SUPERTYPE
	IfcRelSpaceBoundary1stLevel
*/


/* DEFINITION
ENTITY IfcRelSpaceBoundary
SUPERTYPE OF (ONEOF
(IfcRelSpaceBoundary1stLevel))
SUBTYPE OF (IfcRelConnects);
RelatingSpace : IfcSpaceBoundarySelect;
RelatedBuildingElement : IfcElement;
ConnectionGeometry : OPTIONAL IfcConnectionGeometry;
PhysicalOrVirtualBoundary : IfcPhysicalOrVirtualEnum;
InternalOrExternalBoundary : IfcInternalOrExternalEnum;
WHERE
CorrectPhysOrVirt : ((PhysicalOrVirtualBoundary = IfcPhysicalOrVirtualEnum.Physical)
AND (NOT('IFC4.IFCVIRTUALELEMENT' IN TYPEOF(RelatedBuildingElement))))
OR
((PhysicalOrVirtualBoundary = IfcPhysicalOrVirtualEnum.Virtual)
AND (('IFC4.IFCVIRTUALELEMENT' IN TYPEOF(RelatedBuildingElement))
OR   ('IFC4.IFCOPENINGELEMENT' IN TYPEOF(RelatedBuildingElement))))
OR
(PhysicalOrVirtualBoundary = IfcPhysicalOrVirtualEnum.NotDefined);
END_ENTITY;
*/
