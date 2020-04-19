<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSizeSelect extends IFC\Common{

	static public $elementName = 'IFCSIZESELECT';

	static public $translationFR = 'Sélection de taille';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcSizeSelect = SELECT
(IfcDescriptiveMeasure
,IfcLengthMeasure
,IfcNormalisedRatioMeasure
,IfcPositiveLengthMeasure
,IfcPositiveRatioMeasure
,IfcRatioMeasure);
END_TYPE;
*/
