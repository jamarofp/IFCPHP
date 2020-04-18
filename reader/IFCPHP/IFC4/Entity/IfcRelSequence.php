<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelSequence extends IfcRelConnects{

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
			'name' => 'RelatingProcess',
			'class' => 'Entity\IfcProcess',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatedProcess',
			'class' => 'Entity\IfcProcess',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'TimeLag',
			'class' => 'Entity\IfcLagTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'SequenceType',
			'class' => 'Type\IfcSequenceEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'UserDefinedSequenceType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcRelSequence
SUBTYPE OF (IfcRelConnects);
RelatingProcess : IfcProcess;
RelatedProcess : IfcProcess;
TimeLag : OPTIONAL IfcLagTime;
SequenceType : OPTIONAL IfcSequenceEnum;
UserDefinedSequenceType : OPTIONAL IfcLabel;
WHERE
AvoidInconsistentSequence : RelatingProcess :<>: RelatedProcess;
CorrectSequenceType : (SequenceType <> IfcSequenceEnum.USERDEFINED) OR ((SequenceType = IfcSequenceEnum.USERDEFINED) AND EXISTS(UserDefinedSequenceType));
END_ENTITY;
*/
