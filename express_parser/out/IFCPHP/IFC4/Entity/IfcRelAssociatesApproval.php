<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelAssociatesApproval extends IfcRelAssociates{

	static public $elementName = 'IFCRELASSOCIATESAPPROVAL';

	static public $translationFR = 'Association à approbation';

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
			'class' => 'Type\IfcDefinitionSelect',
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
ENTITY IfcRelAssociatesApproval
SUBTYPE OF (IfcRelAssociates);
RelatingApproval : IfcApproval;
END_ENTITY;
*/
