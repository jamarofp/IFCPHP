<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcOrganization extends IFC\Common{

	static public $translationFR = 'Organisation';

	static public $params = [
		[
			'name' => 'Identification',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Description',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
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
ENTITY IfcOrganization;
Identification : OPTIONAL IfcIdentifier;
Name : IfcLabel;
Description : OPTIONAL IfcText;
Roles : OPTIONAL LIST [1:?] OF IfcActorRole;
Addresses : OPTIONAL LIST [1:?] OF IfcAddress;
INVERSE
IsRelatedBy : SET [0:?] OF IfcOrganizationRelationship FOR RelatedOrganizations;
Relates : SET [0:?] OF IfcOrganizationRelationship FOR RelatingOrganization;
Engages : SET [0:?] OF IfcPersonAndOrganization FOR TheOrganization;
END_ENTITY;
*/
