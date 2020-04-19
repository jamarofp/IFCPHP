<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcHatchLineDistanceSelect extends IFC\Common{

	static public $elementName = 'IFCHATCHLINEDISTANCESELECT';

	static public $translationFR = 'Sélection de la distance entre les lignes de hachure';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcHatchLineDistanceSelect = SELECT
(IfcPositiveLengthMeasure
,IfcVector);
END_TYPE;
*/
