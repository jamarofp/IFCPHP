<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralLoadGroup extends IfcGroup{

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
			'name' => 'PredefinedType',
			'class' => 'Type\IfcLoadGroupTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ActionType',
			'class' => 'Type\IfcActionTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ActionSource',
			'class' => 'Type\IfcActionSourceTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Coefficient',
			'class' => 'Type\IfcRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Purpose',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcStructuralLoadCase
*/


/* DEFINITION
ENTITY IfcStructuralLoadGroup
SUPERTYPE OF (ONEOF
(IfcStructuralLoadCase))
SUBTYPE OF (IfcGroup);
PredefinedType : IfcLoadGroupTypeEnum;
ActionType : IfcActionTypeEnum;
ActionSource : IfcActionSourceTypeEnum;
Coefficient : OPTIONAL IfcRatioMeasure;
Purpose : OPTIONAL IfcLabel;
INVERSE
SourceOfResultGroup : SET [0:1] OF IfcStructuralResultGroup FOR ResultForLoadGroup;
LoadGroupFor : SET [0:?] OF IfcStructuralAnalysisModel FOR LoadedBy;
WHERE
HasObjectType : (
(PredefinedType <> IfcLoadGroupTypeEnum.USERDEFINED) AND
(ActionType <> IfcActionTypeEnum.USERDEFINED) AND
(ActionSource <> IfcActionSourceTypeEnum.USERDEFINED)
) OR EXISTS(SELF\IfcObject.ObjectType);
END_ENTITY;
*/
