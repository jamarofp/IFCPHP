<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDataOriginEnum extends IFC\Common{

	static public $elementName = 'IFCDATAORIGINENUM';

	static public $translationFR = 'Enumération des origines des données temporelles';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'MEASURED',
			'PREDICTED',
			'SIMULATED',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcDataOriginEnum = ENUMERATION OF
(MEASURED
,PREDICTED
,SIMULATED
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
