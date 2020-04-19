<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPositiveLengthMeasure extends IFC\Common{

	static public $elementName = 'IFCPOSITIVELENGTHMEASURE';

	static public $translationFR = 'Mesure de longueur positive';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcPositiveLengthMeasure = IfcLengthMeasure;
WHERE
WR1 : SELF > 0.;
END_TYPE;
*/
