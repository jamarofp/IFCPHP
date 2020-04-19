<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelFlowControlElements extends IfcRelConnects{

	static public $elementName = 'IFCRELFLOWCONTROLELEMENTS';

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
			'name' => 'RelatedControlElements',
			'class' => 'Entity\IfcDistributionControlElement',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'RelatingFlowElement',
			'class' => 'Entity\IfcDistributionFlowElement',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRelFlowControlElements
SUBTYPE OF (IfcRelConnects);
RelatedControlElements : SET [1:?] OF IfcDistributionControlElement;
RelatingFlowElement : IfcDistributionFlowElement;
END_ENTITY;
*/
