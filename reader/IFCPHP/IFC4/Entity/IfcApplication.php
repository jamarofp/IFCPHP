<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcApplication extends IFC\Common{

	static public $translationFR = 'Application';

	static public $params = [
		[
			'name' => 'ApplicationDeveloper',
			'class' => 'Entity\IfcOrganization',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Version',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ApplicationFullName',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ApplicationIdentifier',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcApplication;
ApplicationDeveloper : IfcOrganization;
Version : IfcLabel;
ApplicationFullName : IfcLabel;
ApplicationIdentifier : IfcIdentifier;
UNIQUE
UR1 : ApplicationIdentifier;
UR2 : ApplicationFullName, Version;
END_ENTITY;
*/
