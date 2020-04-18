<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTypeProcess extends IfcTypeObject{

	static public $translationFR = 'Définition d\'un type de processus';

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
			'name' => 'ApplicableOccurrence',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'HasPropertySets',
			'class' => 'Entity\IfcPropertySetDefinition',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'Identification',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LongDescription',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ProcessType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcEventType
	IfcProcedureType
	IfcTaskType
*/


/* DEFINITION
ENTITY IfcTypeProcess
ABSTRACT SUPERTYPE OF (ONEOF
(IfcEventType
,IfcProcedureType
,IfcTaskType))
SUBTYPE OF (IfcTypeObject);
Identification : OPTIONAL IfcIdentifier;
LongDescription : OPTIONAL IfcText;
ProcessType : OPTIONAL IfcLabel;
INVERSE
OperatesOn : SET [0:?] OF IfcRelAssignsToProcess FOR RelatingProcess;
END_ENTITY;
*/
