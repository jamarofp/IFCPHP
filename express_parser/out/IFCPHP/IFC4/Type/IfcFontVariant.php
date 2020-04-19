<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcFontVariant extends IFC\Common{

	static public $elementName = 'IFCFONTVARIANT';

	static public $translationFR = 'Police normale ou en petites majuscules';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'normal',
			'small-caps',
		],
	]];
}
/* DEFINITION
TYPE IfcFontVariant = STRING;
WHERE
WR1 : SELF IN ['normal','small-caps'];
END_TYPE;
*/
