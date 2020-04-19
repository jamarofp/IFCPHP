<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcAirTerminalBoxTypeEnum extends IFC\Common{

	static public $elementName = 'IFCAIRTERMINALBOXTYPEENUM';

	static public $translationFR = 'Énumération des types de diffuseur d\'air';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CONSTANTFLOW',
			'VARIABLEFLOWPRESSUREDEPENDANT',
			'VARIABLEFLOWPRESSUREINDEPENDANT',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcAirTerminalBoxTypeEnum = ENUMERATION OF
(CONSTANTFLOW
,VARIABLEFLOWPRESSUREDEPENDANT
,VARIABLEFLOWPRESSUREINDEPENDANT
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
