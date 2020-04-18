<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcModulusOfTranslationalSubgradeReactionSelect extends IFC\Common{

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcModulusOfTranslationalSubgradeReactionSelect = SELECT
(IfcBoolean
,IfcModulusOfLinearSubgradeReactionMeasure);
END_TYPE;
*/
