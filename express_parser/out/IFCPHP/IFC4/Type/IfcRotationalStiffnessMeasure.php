<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcRotationalStiffnessMeasure extends IFC\Common{

	static public $elementName = 'IFCROTATIONALSTIFFNESSMEASURE';

	static public $translationFR = 'Mesure de rigidité rotationnelle';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcRotationalStiffnessMeasure = REAL;
END_TYPE;
*/
