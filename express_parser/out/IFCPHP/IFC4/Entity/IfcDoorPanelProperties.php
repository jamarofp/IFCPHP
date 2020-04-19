<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcDoorPanelProperties extends IfcPreDefinedPropertySet{

	static public $elementName = 'IFCDOORPANELPROPERTIES';

	static public $translationFR = 'Propriétés du panneau de porte';

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
			'name' => 'PanelDepth',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PanelOperation',
			'class' => 'Type\IfcDoorPanelOperationEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'PanelWidth',
			'class' => 'Type\IfcNormalisedRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PanelPosition',
			'class' => 'Type\IfcDoorPanelPositionEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ShapeAspectStyle',
			'class' => 'Entity\IfcShapeAspect',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcDoorPanelProperties
SUBTYPE OF (IfcPreDefinedPropertySet);
PanelDepth : OPTIONAL IfcPositiveLengthMeasure;
PanelOperation : IfcDoorPanelOperationEnum;
PanelWidth : OPTIONAL IfcNormalisedRatioMeasure;
PanelPosition : IfcDoorPanelPositionEnum;
ShapeAspectStyle : OPTIONAL IfcShapeAspect;
WHERE
ApplicableToType : (EXISTS(SELF\IfcPropertySetDefinition.DefinesType[1]))
AND
(
('IFC4.IFCDOORTYPE' IN TYPEOF(SELF\IfcPropertySetDefinition.DefinesType[1]))
OR
('IFC4.IFCDOORSTYLE' IN TYPEOF(SELF\IfcPropertySetDefinition.DefinesType[1]))
);
END_ENTITY;
*/
