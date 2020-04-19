<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcShell extends IFC\Common{

	static public $elementName = 'IFCSHELL';

	static public $translationFR = 'Enveloppe';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcShell = SELECT
(IfcClosedShell
,IfcOpenShell);
END_TYPE;
*/
