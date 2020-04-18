<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcAppliedValueSelect extends IFC\Common{

	static public $translationFR = 'Sélection de valeur appliquée';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcAppliedValueSelect = SELECT
(IfcMeasureWithUnit
,IfcReference
,IfcValue);
END_TYPE;
*/
