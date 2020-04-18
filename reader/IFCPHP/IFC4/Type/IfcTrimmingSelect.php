<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTrimmingSelect extends IFC\Common{

	static public $translationFR = 'Sélection de rognage';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcTrimmingSelect = SELECT
(IfcCartesianPoint
,IfcParameterValue);
END_TYPE;
*/
