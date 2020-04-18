<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDayInWeekNumber extends IFC\Common{

	static public $translationFR = 'Numéro du jour de la semaine';

	static public $params = [[
		'class' => 'Base\Integer',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcDayInWeekNumber = INTEGER;
WHERE
ValidRange : {1 <= SELF <= 7};
END_TYPE;
*/
