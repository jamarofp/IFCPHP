<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSpecularHighlightSelect extends IFC\Common{

	static public $elementName = 'IFCSPECULARHIGHLIGHTSELECT';

	static public $translationFR = 'Sélection de réflexion spéculaire';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcSpecularHighlightSelect = SELECT
(IfcSpecularExponent
,IfcSpecularRoughness);
END_TYPE;
*/
