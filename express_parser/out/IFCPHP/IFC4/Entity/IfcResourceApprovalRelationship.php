<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcResourceApprovalRelationship extends IfcResourceLevelRelationship{

	static public $elementName = 'IFCRESOURCEAPPROVALRELATIONSHIP';

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
			'name' => 'RelatedResourceObjects',
			'class' => 'Type\IfcResourceObjectSelect',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'RelatingApproval',
			'class' => 'Entity\IfcApproval',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcResourceApprovalRelationship
SUBTYPE OF (IfcResourceLevelRelationship);
RelatedResourceObjects : SET [1:?] OF IfcResourceObjectSelect;
RelatingApproval : IfcApproval;
END_ENTITY;
*/
