<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcWindowTypePartitioningEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de partitionnement de fenêtre';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'SINGLE_PANEL',
			'DOUBLE_PANEL_VERTICAL',
			'DOUBLE_PANEL_HORIZONTAL',
			'TRIPLE_PANEL_VERTICAL',
			'TRIPLE_PANEL_BOTTOM',
			'TRIPLE_PANEL_TOP',
			'TRIPLE_PANEL_LEFT',
			'TRIPLE_PANEL_RIGHT',
			'TRIPLE_PANEL_HORIZONTAL',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcWindowTypePartitioningEnum = ENUMERATION OF
(SINGLE_PANEL
,DOUBLE_PANEL_VERTICAL
,DOUBLE_PANEL_HORIZONTAL
,TRIPLE_PANEL_VERTICAL
,TRIPLE_PANEL_BOTTOM
,TRIPLE_PANEL_TOP
,TRIPLE_PANEL_LEFT
,TRIPLE_PANEL_RIGHT
,TRIPLE_PANEL_HORIZONTAL
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
