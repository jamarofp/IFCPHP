<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcWindowPanelPositionEnum extends IFC\Common{

	static public $translationFR = 'Énumération des positions des panneaux de fenêtre';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'LEFT',
			'MIDDLE',
			'RIGHT',
			'BOTTOM',
			'TOP',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcWindowPanelPositionEnum = ENUMERATION OF
(LEFT
,MIDDLE
,RIGHT
,BOTTOM
,TOP
,NOTDEFINED);
END_TYPE;
*/
