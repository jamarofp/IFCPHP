<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTextFontName extends IFC\Common{

	static public $elementName = 'IFCTEXTFONTNAME';

	static public $translationFR = 'Nom de police de caractères';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcTextFontName = STRING;
END_TYPE;
*/
