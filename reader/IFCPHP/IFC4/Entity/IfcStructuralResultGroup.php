<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralResultGroup extends IfcGroup{

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
			'name' => 'TheoryType',
			'class' => 'Type\IfcAnalysisTheoryTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ResultForLoadGroup',
			'class' => 'Entity\IfcStructuralLoadGroup',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'IsLinear',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcStructuralResultGroup
SUBTYPE OF (IfcGroup);
TheoryType : IfcAnalysisTheoryTypeEnum;
ResultForLoadGroup : OPTIONAL IfcStructuralLoadGroup;
IsLinear : BOOLEAN;
INVERSE
ResultGroupFor : SET [0:1] OF IfcStructuralAnalysisModel FOR HasResults;
WHERE
HasObjectType : (TheoryType <> IfcAnalysisTheoryTypeEnum.USERDEFINED) OR EXISTS(SELF\IfcObject.ObjectType);
END_ENTITY;
*/
