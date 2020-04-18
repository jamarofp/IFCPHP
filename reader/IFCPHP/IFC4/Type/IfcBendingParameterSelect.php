<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcBendingParameterSelect extends IFC\Common{

	static public $translationFR = 'Sélection des paramètres de courbure';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcBendingParameterSelect = SELECT
(IfcLengthMeasure
,IfcPlaneAngleMeasure);
END_TYPE;
*/
