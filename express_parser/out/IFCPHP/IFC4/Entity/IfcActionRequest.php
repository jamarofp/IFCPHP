<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcActionRequest extends IfcControl{

	static public $elementName = 'IFCACTIONREQUEST';

	static public $translationFR = 'Requête d\'action';

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
			'name' => 'PredefinedType',
			'class' => 'Type\IfcActionRequestTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Status',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LongDescription',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcActionRequest
SUBTYPE OF (IfcControl);
PredefinedType : OPTIONAL IfcActionRequestTypeEnum;
Status : OPTIONAL IfcLabel;
LongDescription : OPTIONAL IfcText;
END_ENTITY;
*/
