<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPositiveRatioMeasure extends IFC\Common{

	static public $translationFR = 'Mesure de ratio positif';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcPositiveRatioMeasure = IfcRatioMeasure;
WHERE
WR1 : SELF > 0.;
END_TYPE;
*/
