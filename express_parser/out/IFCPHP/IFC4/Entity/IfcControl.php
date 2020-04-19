<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcControl extends IfcObject{

	static public $elementName = 'IFCCONTROL';

	static public $translationFR = 'Contrôle';

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
	];
}
/* SUPERTYPE
	IfcActionRequest
	IfcCostItem
	IfcCostSchedule
	IfcPerformanceHistory
	IfcPermit
	IfcProjectOrder
	IfcWorkCalendar
	IfcWorkControl
*/


/* DEFINITION
ENTITY IfcControl
ABSTRACT SUPERTYPE OF (ONEOF
(IfcActionRequest
,IfcCostItem
,IfcCostSchedule
,IfcPerformanceHistory
,IfcPermit
,IfcProjectOrder
,IfcWorkCalendar
,IfcWorkControl))
SUBTYPE OF (IfcObject);
Identification : OPTIONAL IfcIdentifier;
INVERSE
Controls : SET [0:?] OF IfcRelAssignsToControl FOR RelatingControl;
END_ENTITY;
*/
