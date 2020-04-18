<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDoorPanelOperationEnum extends IFC\Common{

	static public $translationFR = 'Énumération du fonctionnement du panneau de porte';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'SWINGING',
			'DOUBLE_ACTING',
			'SLIDING',
			'FOLDING',
			'REVOLVING',
			'ROLLINGUP',
			'FIXEDPANEL',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcDoorPanelOperationEnum = ENUMERATION OF
(SWINGING
,DOUBLE_ACTING
,SLIDING
,FOLDING
,REVOLVING
,ROLLINGUP
,FIXEDPANEL
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
