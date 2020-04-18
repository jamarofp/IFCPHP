<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelConnectsElements extends IfcRelConnects{

	static public $translationFR = 'Connection d\'éléments';

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
			'name' => 'ConnectionGeometry',
			'class' => 'Entity\IfcConnectionGeometry',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RelatingElement',
			'class' => 'Entity\IfcElement',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatedElement',
			'class' => 'Entity\IfcElement',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcRelConnectsPathElements
	IfcRelConnectsWithRealizingElements
*/


/* DEFINITION
ENTITY IfcRelConnectsElements
SUPERTYPE OF (ONEOF
(IfcRelConnectsPathElements
,IfcRelConnectsWithRealizingElements))
SUBTYPE OF (IfcRelConnects);
ConnectionGeometry : OPTIONAL IfcConnectionGeometry;
RelatingElement : IfcElement;
RelatedElement : IfcElement;
WHERE
NoSelfReference : RelatingElement :<>: RelatedElement;
END_ENTITY;
*/
