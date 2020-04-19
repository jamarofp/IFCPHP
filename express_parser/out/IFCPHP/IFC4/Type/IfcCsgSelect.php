<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCsgSelect extends IFC\Common{

	static public $elementName = 'IFCCSGSELECT';

	static public $translationFR = 'Sélection Csg';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcCsgSelect = SELECT
(IfcBooleanResult
,IfcCsgPrimitive3D);
END_TYPE;
*/
