<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPointOrVertexPoint extends IFC\Common{

	static public $translationFR = 'Point ou sommet';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcPointOrVertexPoint = SELECT
(IfcPoint
,IfcVertexPoint);
END_TYPE;
*/
