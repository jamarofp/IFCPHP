<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcGrid extends IfcProduct{

	static public $elementName = 'IFCGRID';

	static public $translationFR = 'Grille';

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
			'name' => 'UAxes',
			'class' => 'Entity\IfcGridAxis',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'VAxes',
			'class' => 'Entity\IfcGridAxis',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'WAxes',
			'class' => 'Entity\IfcGridAxis',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'PredefinedType',
			'class' => 'Type\IfcGridTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcGrid
SUBTYPE OF (IfcProduct);
UAxes : LIST [1:?] OF UNIQUE IfcGridAxis;
VAxes : LIST [1:?] OF UNIQUE IfcGridAxis;
WAxes : OPTIONAL LIST [1:?] OF UNIQUE IfcGridAxis;
PredefinedType : OPTIONAL IfcGridTypeEnum;
INVERSE
ContainedInStructure : SET [0:1] OF IfcRelContainedInSpatialStructure FOR RelatedElements;
WHERE
HasPlacement : EXISTS(SELF\IfcProduct.ObjectPlacement);
END_ENTITY;
*/
