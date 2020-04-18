<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelConnectsStructuralActivity extends IfcRelConnects{

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
			'name' => 'RelatingElement',
			'class' => 'Type\IfcStructuralActivityAssignmentSelect',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatedStructuralActivity',
			'class' => 'Entity\IfcStructuralActivity',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRelConnectsStructuralActivity
SUBTYPE OF (IfcRelConnects);
RelatingElement : IfcStructuralActivityAssignmentSelect;
RelatedStructuralActivity : IfcStructuralActivity;
END_ENTITY;
*/
