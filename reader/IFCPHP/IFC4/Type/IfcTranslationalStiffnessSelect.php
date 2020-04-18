<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTranslationalStiffnessSelect extends IFC\Common{

	static public $translationFR = 'Sélection de rigidité de translation';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcTranslationalStiffnessSelect = SELECT
(IfcBoolean
,IfcLinearStiffnessMeasure);
END_TYPE;
*/
