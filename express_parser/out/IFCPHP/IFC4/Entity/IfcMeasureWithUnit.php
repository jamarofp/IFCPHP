<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMeasureWithUnit extends IFC\Common{

	static public $elementName = 'IFCMEASUREWITHUNIT';

	static public $translationFR = 'Mesure avec unité';

	static public $params = [
		[
			'name' => 'ValueComponent',
			'class' => 'Type\IfcValue',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'UnitComponent',
			'class' => 'Type\IfcUnit',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcMeasureWithUnit;
ValueComponent : IfcValue;
UnitComponent : IfcUnit;
END_ENTITY;
*/
