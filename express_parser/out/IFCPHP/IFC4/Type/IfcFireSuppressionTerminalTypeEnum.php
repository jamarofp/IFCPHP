<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcFireSuppressionTerminalTypeEnum extends IFC\Common{

	static public $elementName = 'IFCFIRESUPPRESSIONTERMINALTYPEENUM';

	static public $translationFR = 'Enumération des types d\'appareil terminal d\'extinction d\'incendie ';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'BREECHINGINLET',
			'FIREHYDRANT',
			'HOSEREEL',
			'SPRINKLER',
			'SPRINKLERDEFLECTOR',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcFireSuppressionTerminalTypeEnum = ENUMERATION OF
(BREECHINGINLET
,FIREHYDRANT
,HOSEREEL
,SPRINKLER
,SPRINKLERDEFLECTOR
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
