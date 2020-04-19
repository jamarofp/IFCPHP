<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcIrregularTimeSeriesValue extends IFC\Common{

	static public $elementName = 'IFCIRREGULARTIMESERIESVALUE';

	static public $translationFR = 'Valeur(s) d\'un élément d\'une série temporelle irrégulière';

	static public $params = [
		[
			'name' => 'TimeStamp',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => false,
		],
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
ENTITY IfcIrregularTimeSeriesValue;
TimeStamp : IfcDateTime;
ListValues : LIST [1:?] OF IfcValue;
END_ENTITY;
*/
