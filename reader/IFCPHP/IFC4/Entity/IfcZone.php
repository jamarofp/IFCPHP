<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcZone extends IfcSystem{

	static public $translationFR = 'Zone';

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
			'name' => 'ObjectType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LongName',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcZone
SUBTYPE OF (IfcSystem);
LongName : OPTIONAL IfcLabel;
WHERE
WR1 : (SIZEOF(SELF\IfcGroup.IsGroupedBy) = 0) OR
(SIZEOF (QUERY (temp <* SELF\IfcGroup.IsGroupedBy[1].RelatedObjects |
NOT(('IFC4.IFCZONE' IN TYPEOF(temp)) OR
('IFC4.IFCSPACE' IN TYPEOF(temp)) OR
('IFC4.IFCSPATIALZONE' IN TYPEOF(temp))
))) = 0);
END_ENTITY;
*/
