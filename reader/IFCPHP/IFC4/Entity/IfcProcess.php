<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcProcess extends IfcObject{

	static public $translationFR = 'Processus';

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
	];
}
/* SUPERTYPE
	IfcEvent
	IfcProcedure
	IfcTask
*/


/* DEFINITION
ENTITY IfcProcess
ABSTRACT SUPERTYPE OF (ONEOF
(IfcEvent
,IfcProcedure
,IfcTask))
SUBTYPE OF (IfcObject);
Identification : OPTIONAL IfcIdentifier;
LongDescription : OPTIONAL IfcText;
INVERSE
IsPredecessorTo : SET [0:?] OF IfcRelSequence FOR RelatingProcess;
IsSuccessorFrom : SET [0:?] OF IfcRelSequence FOR RelatedProcess;
OperatesOn : SET [0:?] OF IfcRelAssignsToProcess FOR RelatingProcess;
END_ENTITY;
*/
