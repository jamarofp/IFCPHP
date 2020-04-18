<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTextFontSelect extends IFC\Common{

	static public $translationFR = 'Sélection de police de caractères';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcTextFontSelect = SELECT
(IfcExternallyDefinedTextFont
,IfcPreDefinedTextFont);
END_TYPE;
*/
