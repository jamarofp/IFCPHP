<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcElementCompositionEnum extends IFC\Common{

	static public $elementName = 'IFCELEMENTCOMPOSITIONENUM';

	static public $translationFR = 'Énumération de composition d\'élément';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'COMPLEX',
			'ELEMENT',
			'PARTIAL',
		],
	]];
}
/* DEFINITION
TYPE IfcElementCompositionEnum = ENUMERATION OF
(COMPLEX
,ELEMENT
,PARTIAL);
END_TYPE;
*/
