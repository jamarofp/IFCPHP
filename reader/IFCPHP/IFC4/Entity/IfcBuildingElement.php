<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBuildingElement extends IfcElement{

	static public $translationFR = 'Elément de construction';

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
			'name' => 'Tag',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcBeam
	IfcBuildingElementProxy
	IfcChimney
	IfcColumn
	IfcCovering
	IfcCurtainWall
	IfcDoor
	IfcFooting
	IfcMember
	IfcPile
	IfcPlate
	IfcRailing
	IfcRamp
	IfcRampFlight
	IfcRoof
	IfcShadingDevice
	IfcSlab
	IfcStair
	IfcStairFlight
	IfcWall
	IfcWindow
*/


/* DEFINITION
ENTITY IfcBuildingElement
ABSTRACT SUPERTYPE OF (ONEOF
(IfcBeam
,IfcBuildingElementProxy
,IfcChimney
,IfcColumn
,IfcCovering
,IfcCurtainWall
,IfcDoor
,IfcFooting
,IfcMember
,IfcPile
,IfcPlate
,IfcRailing
,IfcRamp
,IfcRampFlight
,IfcRoof
,IfcShadingDevice
,IfcSlab
,IfcStair
,IfcStairFlight
,IfcWall
,IfcWindow))
SUBTYPE OF (IfcElement);
INVERSE
HasCoverings : SET [0:?] OF IfcRelCoversBldgElements FOR RelatingBuildingElement;
WHERE
MaxOneMaterialAssociation : SIZEOF (QUERY(temp <* SELF\IfcObjectDefinition.HasAssociations |
'IFC4.IFCRELASSOCIATESMATERIAL' IN TYPEOF(temp)
)) <= 1;
END_ENTITY;
*/
