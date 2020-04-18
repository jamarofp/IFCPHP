<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTimePeriod extends IFC\Common{

	static public $translationFR = 'Période temporelle';

	static public $params = [
		[
			'name' => 'StartTime',
			'class' => 'Type\IfcTime',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'EndTime',
			'class' => 'Type\IfcTime',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcTimePeriod;
StartTime : IfcTime;
EndTime : IfcTime;
END_ENTITY;
*/
