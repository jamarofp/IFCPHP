<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRoot extends IFC\Common{

	static public $elementName = 'IFCROOT';

	static public $translationFR = 'Racine';

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
	];
}
/* SUPERTYPE
	IfcObjectDefinition
	IfcPropertyDefinition
	IfcRelationship
*/


/* DEFINITION
ENTITY IfcRoot
ABSTRACT SUPERTYPE OF (ONEOF
(IfcObjectDefinition
,IfcPropertyDefinition
,IfcRelationship));
GlobalId : IfcGloballyUniqueId;
OwnerHistory : OPTIONAL IfcOwnerHistory;
Name : OPTIONAL IfcLabel;
Description : OPTIONAL IfcText;
UNIQUE
UR1 : GlobalId;
END_ENTITY;
*/
