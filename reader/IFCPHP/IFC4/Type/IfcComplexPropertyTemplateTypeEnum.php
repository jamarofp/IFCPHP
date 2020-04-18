<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcComplexPropertyTemplateTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de modèle de propriété complexe';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'P_COMPLEX',
			'Q_COMPLEX',
		],
	]];
}
/* DEFINITION
TYPE IfcComplexPropertyTemplateTypeEnum = ENUMERATION OF
(P_COMPLEX
,Q_COMPLEX);
END_TYPE;
*/
