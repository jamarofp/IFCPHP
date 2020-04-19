<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTextDecoration extends IFC\Common{

	static public $elementName = 'IFCTEXTDECORATION';

	static public $translationFR = 'Ornement de texte';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'none',
			'underline',
			'overline',
			'line-through',
			'blink',
		],
	]];
}
/* DEFINITION
TYPE IfcTextDecoration = STRING;
WHERE
WR1 : SELF IN ['none', 'underline', 'overline', 'line-through', 'blink'];
END_TYPE;
*/
