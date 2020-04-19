<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcProcedure extends IfcProcess{

	static public $elementName = 'IFCPROCEDURE';

	static public $translationFR = 'Procédure';

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
			'name' => 'Identification',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LongDescription',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PredefinedType',
			'class' => 'Type\IfcProcedureTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcProcedure
SUBTYPE OF (IfcProcess);
PredefinedType : OPTIONAL IfcProcedureTypeEnum;
WHERE
HasName : EXISTS(SELF\IfcRoot.Name);
CorrectPredefinedType : NOT(EXISTS(PredefinedType)) OR (PredefinedType <> IfcProcedureTypeEnum.USERDEFINED) OR
((PredefinedType = IfcProcedureTypeEnum.USERDEFINED) AND EXISTS(SELF\IfcObject.ObjectType));
END_ENTITY;
*/
