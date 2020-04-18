<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcProject extends IfcContext{

	static public $translationFR = 'Projet';

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
			'name' => 'LongName',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Phase',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RepresentationContexts',
			'class' => 'Entity\IfcRepresentationContext',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'UnitsInContext',
			'class' => 'Entity\IfcUnitAssignment',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcProject
SUBTYPE OF (IfcContext);
WHERE
HasName : EXISTS(SELF\IfcRoot.Name);
CorrectContext : NOT(EXISTS(SELF\IfcContext.RepresentationContexts)) OR
(SIZEOF(QUERY(Temp <* SELF\IfcContext.RepresentationContexts |
'IFC4.IFCGEOMETRICREPRESENTATIONSUBCONTEXT' IN TYPEOF(Temp)
)) = 0);
NoDecomposition : SIZEOF(SELF\IfcObjectDefinition.Decomposes) = 0;
HasOwnerHistory : EXISTS(SELF\IfcRoot.OwnerHistory);
END_ENTITY;
*/
