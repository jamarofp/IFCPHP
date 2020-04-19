<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcBoxAlignment extends IFC\Common{

	static public $elementName = 'IFCBOXALIGNMENT';

	static public $translationFR = 'Alignement de zone de texte';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'top-left',
			'top-middle',
			'top-right',
			'middle-left',
			'center',
			'middle-right',
			'bottom-left',
			'bottom-middle',
			'bottom-right',
		],
	]];
}
/* DEFINITION
TYPE IfcBoxAlignment = IfcLabel;
WHERE
WR1 : SELF IN ['top-left', 'top-middle', 'top-right', 'middle-left', 'center', 'middle-right', 'bottom-left', 'bottom-middle', 'bottom-right'];
END_TYPE;
*/
