<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcVectorOrDirection extends IFC\Common{

	static public $translationFR = 'vecteur ou direction';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcVectorOrDirection = SELECT
(IfcDirection
,IfcVector);
END_TYPE;
*/
