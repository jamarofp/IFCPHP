<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcActorRole extends IFC\Common{

	static public $translationFR = 'Rôle d\'acteur';

	static public $params = [
		[
			'name' => 'Role',
			'class' => 'Type\IfcRoleEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'UserDefinedRole',
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
/* DEFINITION
ENTITY IfcActorRole;
Role : IfcRoleEnum;
UserDefinedRole : OPTIONAL IfcLabel;
Description : OPTIONAL IfcText;
INVERSE
HasExternalReference : SET [0:?] OF IfcExternalReferenceRelationship FOR RelatedResourceObjects;
WHERE
WR1 : (Role <> IfcRoleEnum.USERDEFINED) OR
((Role = IfcRoleEnum.USERDEFINED) AND
EXISTS(SELF.UserDefinedRole));
END_ENTITY;
*/
