<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTimeOrRatioSelect extends IFC\Common{

	static public $elementName = 'IFCTIMEORRATIOSELECT';

	static public $translationFR = 'Sélection temps ou ratio.';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcTimeOrRatioSelect = SELECT
(IfcDuration
,IfcRatioMeasure);
END_TYPE;
*/
