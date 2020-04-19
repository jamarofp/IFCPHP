<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTextAlignment extends IFC\Common{

	static public $elementName = 'IFCTEXTALIGNMENT';

	static public $translationFR = 'Alignement de texte';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'left',
			'right',
			'center',
			'justify',
		],
	]];
}
/* DEFINITION
TYPE IfcTextAlignment = STRING;
WHERE
WR1 : SELF IN ['left', 'right', 'center', 'justify'];
END_TYPE;
*/
