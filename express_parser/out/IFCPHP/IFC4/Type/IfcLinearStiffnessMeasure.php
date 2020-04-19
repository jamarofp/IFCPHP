<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLinearStiffnessMeasure extends IFC\Common{

	static public $elementName = 'IFCLINEARSTIFFNESSMEASURE';

	static public $translationFR = 'Mesure de rigidité linéaire';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcLinearStiffnessMeasure = REAL;
END_TYPE;
*/
