<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcWindow extends IfcBuildingElement{

	static public $elementName = 'IFCWINDOW';

	static public $translationFR = 'Fenêtre';

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
		[
			'name' => 'OverallHeight',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'OverallWidth',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PredefinedType',
			'class' => 'Type\IfcWindowTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PartitioningType',
			'class' => 'Type\IfcWindowTypePartitioningEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'UserDefinedPartitioningType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcWindowStandardCase
*/


/* DEFINITION
ENTITY IfcWindow
SUPERTYPE OF (ONEOF
(IfcWindowStandardCase))
SUBTYPE OF (IfcBuildingElement);
OverallHeight : OPTIONAL IfcPositiveLengthMeasure;
OverallWidth : OPTIONAL IfcPositiveLengthMeasure;
PredefinedType : OPTIONAL IfcWindowTypeEnum;
PartitioningType : OPTIONAL IfcWindowTypePartitioningEnum;
UserDefinedPartitioningType : OPTIONAL IfcLabel;
WHERE
CorrectStyleAssigned : (SIZEOF(IsTypedBy) = 0)
OR ('IFC4.IFCWINDOWTYPE' IN TYPEOF(SELF\IfcObject.IsTypedBy[1].RelatingType));
END_ENTITY;
*/
