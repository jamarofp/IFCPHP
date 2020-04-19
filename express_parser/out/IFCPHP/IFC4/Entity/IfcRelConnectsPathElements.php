<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelConnectsPathElements extends IfcRelConnectsElements{

	static public $elementName = 'IFCRELCONNECTSPATHELEMENTS';

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
			'name' => 'ConnectionGeometry',
			'class' => 'Entity\IfcConnectionGeometry',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RelatingElement',
			'class' => 'Entity\IfcElement',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatedElement',
			'class' => 'Entity\IfcElement',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatingPriorities',
			'class' => 'Base\Number',
			'type' => 'array',
			'optional' => false,
			'min' => 0,
		],
		[
			'name' => 'RelatedPriorities',
			'class' => 'Base\Number',
			'type' => 'array',
			'optional' => false,
			'min' => 0,
		],
		[
			'name' => 'RelatedConnectionType',
			'class' => 'Type\IfcConnectionTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatingConnectionType',
			'class' => 'Type\IfcConnectionTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRelConnectsPathElements
SUBTYPE OF (IfcRelConnectsElements);
RelatingPriorities : LIST [0:?] OF NUMBER;
RelatedPriorities : LIST [0:?] OF NUMBER;
RelatedConnectionType : IfcConnectionTypeEnum;
RelatingConnectionType : IfcConnectionTypeEnum;
WHERE
NormalizedRelatingPriorities : (SIZEOF(RelatingPriorities) = 0)
OR
(SIZEOF (QUERY (temp <* RelatingPriorities
| {0.0 <= temp <= 1.0}
)) = SIZEOF(RelatingPriorities));
NormalizedRelatedPriorities : (SIZEOF(RelatedPriorities) = 0)
OR
(SIZEOF (QUERY (temp <* RelatedPriorities
| {0.0 <= temp <= 1.0}
)) = SIZEOF(RelatedPriorities));
END_ENTITY;
*/
