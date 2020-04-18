<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcWindowPanelOperationEnum extends IFC\Common{

	static public $translationFR = 'Énumération du fonctionnement des panneaux de fenêtre';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'SIDEHUNGRIGHTHAND',
			'SIDEHUNGLEFTHAND',
			'TILTANDTURNRIGHTHAND',
			'TILTANDTURNLEFTHAND',
			'TOPHUNG',
			'BOTTOMHUNG',
			'PIVOTHORIZONTAL',
			'PIVOTVERTICAL',
			'SLIDINGHORIZONTAL',
			'SLIDINGVERTICAL',
			'REMOVABLECASEMENT',
			'FIXEDCASEMENT',
			'OTHEROPERATION',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcWindowPanelOperationEnum = ENUMERATION OF
(SIDEHUNGRIGHTHAND
,SIDEHUNGLEFTHAND
,TILTANDTURNRIGHTHAND
,TILTANDTURNLEFTHAND
,TOPHUNG
,BOTTOMHUNG
,PIVOTHORIZONTAL
,PIVOTVERTICAL
,SLIDINGHORIZONTAL
,SLIDINGVERTICAL
,REMOVABLECASEMENT
,FIXEDCASEMENT
,OTHEROPERATION
,NOTDEFINED);
END_TYPE;
*/
