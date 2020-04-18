<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPresentationStyleSelect extends IFC\Common{

	static public $translationFR = 'Sélection du style de présentation';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcPresentationStyleSelect = SELECT
(IfcCurveStyle
,IfcFillAreaStyle
,IfcNullStyle
,IfcSurfaceStyle
,IfcTextStyle);
END_TYPE;
*/
