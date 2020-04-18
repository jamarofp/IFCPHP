<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcFeatureElementSubtraction extends IfcFeatureElement{

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
	IfcOpeningElement
	IfcVoidingFeature
*/


/* DEFINITION
ENTITY IfcFeatureElementSubtraction
ABSTRACT SUPERTYPE OF (ONEOF
(IfcOpeningElement
,IfcVoidingFeature))
SUBTYPE OF (IfcFeatureElement);
INVERSE
VoidsElements : IfcRelVoidsElement FOR RelatedOpeningElement;
WHERE
HasNoSubtraction : SIZEOF(SELF\IfcElement.HasOpenings) = 0;
IsNotFilling : SIZEOF(SELF\IfcElement.FillsVoids) = 0;
END_ENTITY;
*/
