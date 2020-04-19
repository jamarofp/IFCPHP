<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSolidOrShell extends IFC\Common{

	static public $elementName = 'IFCSOLIDORSHELL';

	static public $translationFR = 'Solide ou enveloppe';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcSolidOrShell = SELECT
(IfcClosedShell
,IfcSolidModel);
END_TYPE;
*/
