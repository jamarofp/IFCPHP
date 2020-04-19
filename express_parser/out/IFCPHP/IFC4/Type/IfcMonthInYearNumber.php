<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcMonthInYearNumber extends IFC\Common{

	static public $elementName = 'IFCMONTHINYEARNUMBER';

	static public $translationFR = 'Nombre de mois dans l\'année';

	static public $params = [[
		'class' => 'Base\Integer',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcMonthInYearNumber = INTEGER;
WHERE
ValidRange : {1 <= SELF <= 12};
END_TYPE;
*/
