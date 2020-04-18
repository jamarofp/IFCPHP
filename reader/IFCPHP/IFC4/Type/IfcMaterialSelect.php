<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcMaterialSelect extends IFC\Common{

	static public $translationFR = 'Sélection de matériau';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcMaterialSelect = SELECT
(IfcMaterialDefinition
,IfcMaterialList
,IfcMaterialUsageDefinition);
END_TYPE;
*/
