<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPersonAndOrganization extends IFC\Common{

	static public $translationFR = 'Personne agissant au nom d\'une organisation';

	static public $params = [
		[
			'name' => 'ThePerson',
			'class' => 'Entity\IfcPerson',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'TheOrganization',
			'class' => 'Entity\IfcOrganization',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Roles',
			'class' => 'Entity\IfcActorRole',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcPersonAndOrganization;
ThePerson : IfcPerson;
TheOrganization : IfcOrganization;
Roles : OPTIONAL LIST [1:?] OF IfcActorRole;
END_ENTITY;
*/
