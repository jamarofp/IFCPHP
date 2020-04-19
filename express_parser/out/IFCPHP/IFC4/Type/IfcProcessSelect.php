<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcProcessSelect extends IFC\Common{

	static public $elementName = 'IFCPROCESSSELECT';

	static public $translationFR = 'Sélection entre processus et type de processus';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcProcessSelect = SELECT
(IfcProcess
,IfcTypeProcess);
END_TYPE;
*/
