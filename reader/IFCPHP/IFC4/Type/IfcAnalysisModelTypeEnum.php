<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcAnalysisModelTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types de modèle analytique';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'IN_PLANE_LOADING_',
			'OUT_PLANE_LOADING_',
			'LOADING_',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcAnalysisModelTypeEnum = ENUMERATION OF
(IN_PLANE_LOADING_2D
,OUT_PLANE_LOADING_2D
,LOADING_3D
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
