<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcEvent extends IfcProcess{

	static public $elementName = 'IFCEVENT';

	static public $translationFR = 'Evènement';

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
		[
			'name' => 'PredefinedType',
			'class' => 'Type\IfcEventTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'EventTriggerType',
			'class' => 'Type\IfcEventTriggerTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'UserDefinedEventTriggerType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'EventOccurenceTime',
			'class' => 'Entity\IfcEventTime',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcEvent
SUBTYPE OF (IfcProcess);
PredefinedType : OPTIONAL IfcEventTypeEnum;
EventTriggerType : OPTIONAL IfcEventTriggerTypeEnum;
UserDefinedEventTriggerType : OPTIONAL IfcLabel;
EventOccurenceTime : OPTIONAL IfcEventTime;
WHERE
CorrectPredefinedType : NOT(EXISTS(PredefinedType)) OR (PredefinedType <> IfcEventTypeEnum.USERDEFINED) OR ((PredefinedType = IfcEventTypeEnum.USERDEFINED) AND EXISTS(SELF\IfcObject.ObjectType));
CorrectTypeAssigned : NOT(EXISTS(EventTriggerType)) OR (EventTriggerType <> IfcEventTriggerTypeEnum.USERDEFINED) OR ((EventTriggerType = IfcEventTriggerTypeEnum.USERDEFINED) AND EXISTS(UserDefinedEventTriggerType));
END_ENTITY;
*/
