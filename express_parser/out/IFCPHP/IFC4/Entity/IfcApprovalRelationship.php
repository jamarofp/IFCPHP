<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcApprovalRelationship extends IfcResourceLevelRelationship{

	static public $elementName = 'IFCAPPROVALRELATIONSHIP';

	static public $translationFR = 'Relation d\'approbation';

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
			'name' => 'RelatingApproval',
			'class' => 'Entity\IfcApproval',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatedApprovals',
			'class' => 'Entity\IfcApproval',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcApprovalRelationship
SUBTYPE OF (IfcResourceLevelRelationship);
RelatingApproval : IfcApproval;
RelatedApprovals : SET [1:?] OF IfcApproval;
END_ENTITY;
*/
