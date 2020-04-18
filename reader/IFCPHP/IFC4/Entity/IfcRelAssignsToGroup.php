<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelAssignsToGroup extends IfcRelAssigns{

	static public $translationFR = 'Assignation à groupe';

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
			'name' => 'RelatedObjects',
			'class' => 'Entity\IfcObjectDefinition',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'RelatedObjectsType',
			'class' => 'Type\IfcObjectTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RelatingGroup',
			'class' => 'Entity\IfcGroup',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcRelAssignsToGroupByFactor
*/


/* DEFINITION
ENTITY IfcRelAssignsToGroup
SUPERTYPE OF (ONEOF
(IfcRelAssignsToGroupByFactor))
SUBTYPE OF (IfcRelAssigns);
RelatingGroup : IfcGroup;
WHERE
NoSelfReference : SIZEOF(QUERY(Temp <* SELF\IfcRelAssigns.RelatedObjects | RelatingGroup :=: Temp)) = 0;
END_ENTITY;
*/
