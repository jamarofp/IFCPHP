<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLuminousIntensityDistributionMeasure extends IFC\Common{

	static public $elementName = 'IFCLUMINOUSINTENSITYDISTRIBUTIONMEASURE';

	static public $translationFR = 'Mesure de la distribution de l\'intensité lumineuse';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcLuminousIntensityDistributionMeasure = REAL;
END_TYPE;
*/
