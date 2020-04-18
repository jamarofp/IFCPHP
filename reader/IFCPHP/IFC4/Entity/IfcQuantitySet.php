<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcQuantitySet extends IfcPropertySetDefinition{

	static public $translationFR = 'Ensemble de quantités';

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
	];
}
/* SUPERTYPE
	IfcElementQuantity
*/


/* DEFINITION
ENTITY IfcQuantitySet
ABSTRACT SUPERTYPE OF (ONEOF
(IfcElementQuantity))
SUBTYPE OF (IfcPropertySetDefinition);
END_ENTITY;
*/
