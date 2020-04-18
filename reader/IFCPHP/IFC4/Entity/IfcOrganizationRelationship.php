<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcOrganizationRelationship extends IfcResourceLevelRelationship{

	static public $translationFR = 'Relation entre organisations';

	static public $params = [
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
			'name' => 'RelatingOrganization',
			'class' => 'Entity\IfcOrganization',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatedOrganizations',
			'class' => 'Entity\IfcOrganization',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcOrganizationRelationship
SUBTYPE OF (IfcResourceLevelRelationship);
RelatingOrganization : IfcOrganization;
RelatedOrganizations : SET [1:?] OF IfcOrganization;
END_ENTITY;
*/
