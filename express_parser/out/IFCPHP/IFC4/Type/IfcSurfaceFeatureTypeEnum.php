<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSurfaceFeatureTypeEnum extends IFC\Common{

	static public $elementName = 'IFCSURFACEFEATURETYPEENUM';

	static public $translationFR = 'Enumération des types de traitement de surface';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'MARK',
			'TAG',
			'TREATMENT',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcSurfaceFeatureTypeEnum = ENUMERATION OF
(MARK
,TAG
,TREATMENT
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
