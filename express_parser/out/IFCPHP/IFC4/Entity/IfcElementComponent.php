<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcElementComponent extends IfcElement{

	static public $elementName = 'IFCELEMENTCOMPONENT';

	static public $translationFR = 'Composant d\'élément';

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
	IfcBuildingElementPart
	IfcDiscreteAccessory
	IfcFastener
	IfcMechanicalFastener
	IfcReinforcingElement
	IfcVibrationIsolator
*/


/* DEFINITION
ENTITY IfcElementComponent
ABSTRACT SUPERTYPE OF (ONEOF
(IfcBuildingElementPart
,IfcDiscreteAccessory
,IfcFastener
,IfcMechanicalFastener
,IfcReinforcingElement
,IfcVibrationIsolator))
SUBTYPE OF (IfcElement);
END_ENTITY;
*/
