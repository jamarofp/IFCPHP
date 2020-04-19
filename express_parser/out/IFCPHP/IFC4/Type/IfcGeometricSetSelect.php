<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcGeometricSetSelect extends IFC\Common{

	static public $elementName = 'IFCGEOMETRICSETSELECT';

	static public $translationFR = 'Sélection des items de représentation géométrique';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcGeometricSetSelect = SELECT
(IfcCurve
,IfcPoint
,IfcSurface);
END_TYPE;
*/
