<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcGloballyUniqueId extends IFC\Common{

	static public $elementName = 'IFCGLOBALLYUNIQUEID';

	static public $translationFR = 'Identifiant unique global';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcGloballyUniqueId = STRING(22) FIXED;
END_TYPE;
*/
