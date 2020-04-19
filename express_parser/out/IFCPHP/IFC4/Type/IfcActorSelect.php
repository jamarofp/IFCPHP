<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcActorSelect extends IFC\Common{

	static public $elementName = 'IFCACTORSELECT';

	static public $translationFR = 'Sélection d\'acteur';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcActorSelect = SELECT
(IfcOrganization
,IfcPerson
,IfcPersonAndOrganization);
END_TYPE;
*/
