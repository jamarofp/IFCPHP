<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcMolecularWeightMeasure extends IFC\Common{

	static public $elementName = 'IFCMOLECULARWEIGHTMEASURE';

	static public $translationFR = 'Mesure du poids moléculaire';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcMolecularWeightMeasure = REAL;
END_TYPE;
*/
