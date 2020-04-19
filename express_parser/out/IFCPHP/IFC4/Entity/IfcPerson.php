<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPerson extends IFC\Common{

	static public $elementName = 'IFCPERSON';

	static public $translationFR = 'Personne';

	static public $params = [
		[
			'name' => 'Identification',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'FamilyName',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'GivenName',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'MiddleNames',
			'class' => 'Type\IfcLabel',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'PrefixTitles',
			'class' => 'Type\IfcLabel',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'SuffixTitles',
			'class' => 'Type\IfcLabel',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'Roles',
			'class' => 'Entity\IfcActorRole',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'Addresses',
			'class' => 'Entity\IfcAddress',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcPerson;
Identification : OPTIONAL IfcIdentifier;
FamilyName : OPTIONAL IfcLabel;
GivenName : OPTIONAL IfcLabel;
MiddleNames : OPTIONAL LIST [1:?] OF IfcLabel;
PrefixTitles : OPTIONAL LIST [1:?] OF IfcLabel;
SuffixTitles : OPTIONAL LIST [1:?] OF IfcLabel;
Roles : OPTIONAL LIST [1:?] OF IfcActorRole;
Addresses : OPTIONAL LIST [1:?] OF IfcAddress;
INVERSE
EngagedIn : SET [0:?] OF IfcPersonAndOrganization FOR ThePerson;
WHERE
IdentifiablePerson : EXISTS(Identification) OR EXISTS(FamilyName) OR EXISTS(GivenName);
ValidSetOfNames : NOT EXISTS(MiddleNames) OR EXISTS(FamilyName) OR EXISTS(GivenName);
END_ENTITY;
*/
