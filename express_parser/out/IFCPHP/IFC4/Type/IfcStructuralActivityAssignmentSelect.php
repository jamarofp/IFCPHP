<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcStructuralActivityAssignmentSelect extends IFC\Common{

	static public $elementName = 'IFCSTRUCTURALACTIVITYASSIGNMENTSELECT';

	static public $translationFR = 'Sélection d\'assignation d\'activité structurelle';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcStructuralActivityAssignmentSelect = SELECT
(IfcElement
,IfcStructuralItem);
END_TYPE;
*/
