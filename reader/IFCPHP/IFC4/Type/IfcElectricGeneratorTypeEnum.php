<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcElectricGeneratorTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de générateur électrique';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CHP',
			'ENGINEGENERATOR',
			'STANDALONE',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcElectricGeneratorTypeEnum = ENUMERATION OF
(CHP
,ENGINEGENERATOR
,STANDALONE
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
