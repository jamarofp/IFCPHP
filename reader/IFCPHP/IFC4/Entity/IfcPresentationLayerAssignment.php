<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPresentationLayerAssignment extends IFC\Common{

	static public $translationFR = 'Assignation de calque';

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
	];
}
/* SUPERTYPE
	IfcPresentationLayerWithStyle
*/


/* DEFINITION
ENTITY IfcPresentationLayerAssignment
SUPERTYPE OF (ONEOF
(IfcPresentationLayerWithStyle));
Name : IfcLabel;
Description : OPTIONAL IfcText;
AssignedItems : SET [1:?] OF IfcLayeredItem;
Identifier : OPTIONAL IfcIdentifier;
WHERE
ApplicableItems : SIZEOF(QUERY(temp <* AssignedItems | (
SIZEOF(TYPEOF(temp) * [
'IFC4.IFCSHAPEREPRESENTATION',
'IFC4.IFCGEOMETRICREPRESENTATIONITEM',
'IFC4.IFCMAPPEDITEM']) = 1)
)) = SIZEOF(AssignedItems);
END_ENTITY;
*/
