<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStyledItem extends IfcRepresentationItem{

	static public $params = [
		[
			'name' => 'Item',
			'class' => 'Entity\IfcRepresentationItem',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Styles',
			'class' => 'Type\IfcStyleAssignmentSelect',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcStyledItem
SUBTYPE OF (IfcRepresentationItem);
Item : OPTIONAL IfcRepresentationItem;
Styles : SET [1:?] OF IfcStyleAssignmentSelect;
Name : OPTIONAL IfcLabel;
WHERE
ApplicableItem : NOT('IFC4.IFCSTYLEDITEM' IN TYPEOF(Item));
END_ENTITY;
*/
