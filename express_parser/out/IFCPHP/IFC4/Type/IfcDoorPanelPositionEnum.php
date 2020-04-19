<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDoorPanelPositionEnum extends IFC\Common{

	static public $elementName = 'IFCDOORPANELPOSITIONENUM';

	static public $translationFR = 'Énumération de la position du panneau de porte';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'LEFT',
			'MIDDLE',
			'RIGHT',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcDoorPanelPositionEnum = ENUMERATION OF
(LEFT
,MIDDLE
,RIGHT
,NOTDEFINED);
END_TYPE;
*/
