<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPresentationLayerWithStyle extends IfcPresentationLayerAssignment{

	static public $elementName = 'IFCPRESENTATIONLAYERWITHSTYLE';

	static public $translationFR = 'Assignation de calque avec style';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Description',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'AssignedItems',
			'class' => 'Type\IfcLayeredItem',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'Identifier',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LayerOn',
			'class' => 'Base\Logical',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'LayerFrozen',
			'class' => 'Base\Logical',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'LayerBlocked',
			'class' => 'Base\Logical',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'LayerStyles',
			'class' => 'Entity\IfcPresentationStyle',
			'type' => 'array',
			'optional' => false,
			'min' => 0,
		],
	];
}
/* DEFINITION
ENTITY IfcPresentationLayerWithStyle
SUBTYPE OF (IfcPresentationLayerAssignment);
LayerOn : LOGICAL;
LayerFrozen : LOGICAL;
LayerBlocked : LOGICAL;
LayerStyles : SET [0:?] OF IfcPresentationStyle;
WHERE
ApplicableOnlyToItems : SIZEOF(QUERY(temp <* AssignedItems | (
SIZEOF(TYPEOF(temp) * [
'IFC4.IFCGEOMETRICREPRESENTATIONITEM',
'IFC4.IFCMAPPEDITEM']) = 1)
)) = SIZEOF(AssignedItems);
END_ENTITY;
*/
