<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPositivePlaneAngleMeasure extends IFC\Common{

	static public $translationFR = 'Mesure d\'angle plan positif';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcPositivePlaneAngleMeasure = IfcPlaneAngleMeasure;
WHERE
WR1 : SELF > 0.;
END_TYPE;
*/
