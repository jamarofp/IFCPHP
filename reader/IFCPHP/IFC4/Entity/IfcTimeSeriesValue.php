<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTimeSeriesValue extends IFC\Common{

	static public $translationFR = 'Valeur de séries temporelles';

	static public $params = [
		[
			'name' => 'ListValues',
			'class' => 'Type\IfcValue',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcTimeSeriesValue;
ListValues : LIST [1:?] OF IfcValue;
END_ENTITY;
*/
