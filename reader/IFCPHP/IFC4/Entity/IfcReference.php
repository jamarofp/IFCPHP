<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcReference extends IFC\Common{

	static public $translationFR = 'Référence';

	static public $params = [
		[
			'name' => 'TypeIdentifier',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'AttributeIdentifier',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'InstanceName',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ListPositions',
			'class' => 'Base\Integer',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'InnerReference',
			'class' => 'Entity\IfcReference',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcReference;
TypeIdentifier : OPTIONAL IfcIdentifier;
AttributeIdentifier : OPTIONAL IfcIdentifier;
InstanceName : OPTIONAL IfcLabel;
ListPositions : OPTIONAL LIST [1:?] OF INTEGER;
InnerReference : OPTIONAL IfcReference;
END_ENTITY;
*/
