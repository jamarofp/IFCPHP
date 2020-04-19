<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStair extends IfcBuildingElement{

	static public $elementName = 'IFCSTAIR';

	static public $translationFR = 'Escalier';

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
			'name' => 'ObjectPlacement',
			'class' => 'Entity\IfcObjectPlacement',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Representation',
			'class' => 'Entity\IfcProductRepresentation',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Tag',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PredefinedType',
			'class' => 'Type\IfcStairTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcStair
SUBTYPE OF (IfcBuildingElement);
PredefinedType : OPTIONAL IfcStairTypeEnum;
WHERE
CorrectShapeDecomposition : (HIINDEX(SELF\IfcObjectDefinition.IsDecomposedBy) = 0)
OR
((HIINDEX(SELF\IfcObjectDefinition.IsDecomposedBy) = 1)
AND
((NOT(EXISTS(SELF\IfcProduct.Representation)))
OR
((EXISTS(SELF\IfcProduct.Representation))
AND
(SIZEOF(QUERY( temp <* SELF\IfcProduct.Representation.Representations |
temp.RepresentationIdentifier = 'Body')) = 0
)
)
)
);
CorrectPredefinedType : NOT(EXISTS(PredefinedType)) OR
(PredefinedType <> IfcStairTypeEnum.USERDEFINED) OR
((PredefinedType = IfcStairTypeEnum.USERDEFINED) AND EXISTS (SELF\IfcObject.ObjectType));
CorrectTypeAssigned : (SIZEOF(IsTypedBy) = 0) OR
('IFC4.IFCSTAIRTYPE' IN TYPEOF(SELF\IfcObject.IsTypedBy[1].RelatingType));
END_ENTITY;
*/
