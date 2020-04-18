<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcRotationalStiffnessSelect extends IFC\Common{

	static public $translationFR = 'Sélection de rigidité rotationnelle';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcRotationalStiffnessSelect = SELECT
(IfcBoolean
,IfcRotationalStiffnessMeasure);
END_TYPE;
*/
