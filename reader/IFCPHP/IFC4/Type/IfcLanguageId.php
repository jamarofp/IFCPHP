<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLanguageId extends IFC\Common{

	static public $translationFR = 'Identifiant de langage';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcLanguageId = IfcIdentifier;
END_TYPE;
*/
