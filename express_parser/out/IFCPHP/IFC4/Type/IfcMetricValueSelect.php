<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcMetricValueSelect extends IFC\Common{

	static public $elementName = 'IFCMETRICVALUESELECT';

	static public $translationFR = 'Sélection du type de valeur associé à une métrique';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcMetricValueSelect = SELECT
(IfcAppliedValue
,IfcMeasureWithUnit
,IfcReference
,IfcTable
,IfcTimeSeries
,IfcValue);
END_TYPE;
*/
