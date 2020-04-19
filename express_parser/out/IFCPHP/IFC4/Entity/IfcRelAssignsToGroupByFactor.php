<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelAssignsToGroupByFactor extends IfcRelAssignsToGroup{

	static public $elementName = 'IFCRELASSIGNSTOGROUPBYFACTOR';

	static public $translationFR = 'Association à un groupe avec pondération';

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
			'name' => 'RelatedObjects',
			'class' => 'Entity\IfcObjectDefinition',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'RelatedObjectsType',
			'class' => 'Type\IfcObjectTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RelatingGroup',
			'class' => 'Entity\IfcGroup',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Factor',
			'class' => 'Type\IfcRatioMeasure',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRelAssignsToGroupByFactor
SUBTYPE OF (IfcRelAssignsToGroup);
Factor : IfcRatioMeasure;
END_ENTITY;
*/
