<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcFontStyle extends IFC\Common{

	static public $translationFR = 'Style de police';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'normal',
			'italic',
			'oblique',
		],
	]];
}
/* DEFINITION
TYPE IfcFontStyle = STRING;
WHERE
WR1 : SELF IN ['normal','italic','oblique'];
END_TYPE;
*/
