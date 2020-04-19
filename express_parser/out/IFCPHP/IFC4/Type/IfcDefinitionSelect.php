<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDefinitionSelect extends IFC\Common{

	static public $elementName = 'IFCDEFINITIONSELECT';

	static public $translationFR = 'Sélection de définition';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcDefinitionSelect = SELECT
(IfcObjectDefinition
,IfcPropertyDefinition);
END_TYPE;
*/
