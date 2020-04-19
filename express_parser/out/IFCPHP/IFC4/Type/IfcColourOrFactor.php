<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcColourOrFactor extends IFC\Common{

	static public $elementName = 'IFCCOLOURORFACTOR';

	static public $translationFR = 'couleur ou facteur';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcColourOrFactor = SELECT
(IfcColourRgb
,IfcNormalisedRatioMeasure);
END_TYPE;
*/
