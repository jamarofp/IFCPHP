<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcContextDependentMeasure extends IFC\Common{

	static public $translationFR = 'Mesure dépendant du contexte';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcContextDependentMeasure = REAL;
END_TYPE;
*/
