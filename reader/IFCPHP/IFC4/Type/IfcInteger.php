<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcInteger extends IFC\Common{

	static public $translationFR = 'Entier';

	static public $params = [[
		'class' => 'Base\Integer',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcInteger = INTEGER;
END_TYPE;
*/
