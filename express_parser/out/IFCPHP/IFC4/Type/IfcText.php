<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcText extends IFC\Common{

	static public $elementName = 'IFCTEXT';

	static public $translationFR = 'Texte';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcText = STRING;
END_TYPE;
*/
