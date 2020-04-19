<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSimpleValue extends IFC\Common{

	static public $elementName = 'IFCSIMPLEVALUE';

	static public $translationFR = 'Valeur simple';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcSimpleValue = SELECT
(IfcBoolean
,IfcDate
,IfcDateTime
,IfcDuration
,IfcIdentifier
,IfcInteger
,IfcLabel
,IfcLogical
,IfcReal
,IfcText
,IfcTime
,IfcTimeStamp);
END_TYPE;
*/
