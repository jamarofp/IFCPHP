<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelInterferesElements extends IfcRelConnects{

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
		[
			'name' => 'InterferenceGeometry',
			'class' => 'Entity\IfcConnectionGeometry',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'InterferenceType',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ImpliedOrder',
			'class' => 'Base\Logical',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRelInterferesElements
SUBTYPE OF (IfcRelConnects);
RelatingElement : IfcElement;
RelatedElement : IfcElement;
InterferenceGeometry : OPTIONAL IfcConnectionGeometry;
InterferenceType : OPTIONAL IfcIdentifier;
ImpliedOrder : LOGICAL;
WHERE
NotSelfReference : RelatingElement :<>: RelatedElement;
END_ENTITY;
*/
