<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSchedulingTime extends IFC\Common{

	static public $elementName = 'IFCSCHEDULINGTIME';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'DataOrigin',
			'class' => 'Type\IfcDataOriginEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'UserDefinedDataOrigin',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcEventTime
	IfcLagTime
	IfcResourceTime
	IfcTaskTime
	IfcWorkTime
*/


/* DEFINITION
ENTITY IfcSchedulingTime
ABSTRACT SUPERTYPE OF (ONEOF
(IfcEventTime
,IfcLagTime
,IfcResourceTime
,IfcTaskTime
,IfcWorkTime));
Name : OPTIONAL IfcLabel;
DataOrigin : OPTIONAL IfcDataOriginEnum;
UserDefinedDataOrigin : OPTIONAL IfcLabel;
END_ENTITY;
*/
