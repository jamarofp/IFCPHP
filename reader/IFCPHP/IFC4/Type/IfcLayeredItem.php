<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLayeredItem extends IFC\Common{

	static public $translationFR = 'Item composite';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcLayeredItem = SELECT
(IfcRepresentation
,IfcRepresentationItem);
END_TYPE;
*/
