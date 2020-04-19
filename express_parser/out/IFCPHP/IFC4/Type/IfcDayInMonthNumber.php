<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDayInMonthNumber extends IFC\Common{

	static public $elementName = 'IFCDAYINMONTHNUMBER';

	static public $translationFR = 'Numéro du jour du mois';

	static public $params = [[
		'class' => 'Base\Integer',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcDayInMonthNumber = INTEGER;
WHERE
ValidRange : {1 <= SELF <= 31};
END_TYPE;
*/
