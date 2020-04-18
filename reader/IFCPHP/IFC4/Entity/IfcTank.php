<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTank extends IfcFlowStorageDevice{

	static public $translationFR = 'Réservoir';

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
			'class' => 'Type\IfcTankTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcTank
SUBTYPE OF (IfcFlowStorageDevice);
PredefinedType : OPTIONAL IfcTankTypeEnum;
WHERE
CorrectPredefinedType : NOT(EXISTS(PredefinedType)) OR
(PredefinedType <> IfcTankTypeEnum.USERDEFINED) OR
((PredefinedType = IfcTankTypeEnum.USERDEFINED) AND EXISTS (SELF\IfcObject.ObjectType));
CorrectTypeAssigned : (SIZEOF(IsTypedBy) = 0) OR
('IFC4.IFCTANKTYPE' IN TYPEOF(SELF\IfcObject.IsTypedBy[1].RelatingType));
END_ENTITY;
*/
