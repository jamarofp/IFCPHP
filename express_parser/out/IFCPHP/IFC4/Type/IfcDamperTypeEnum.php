<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDamperTypeEnum extends IFC\Common{

	static public $elementName = 'IFCDAMPERTYPEENUM';

	static public $translationFR = 'Énumération des types de détecteur d\'incendie';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'BACKDRAFTDAMPER',
			'BALANCINGDAMPER',
			'BLASTDAMPER',
			'CONTROLDAMPER',
			'FIREDAMPER',
			'FIRESMOKEDAMPER',
			'FUMEHOODEXHAUST',
			'GRAVITYDAMPER',
			'GRAVITYRELIEFDAMPER',
			'RELIEFDAMPER',
			'SMOKEDAMPER',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcDamperTypeEnum = ENUMERATION OF
(BACKDRAFTDAMPER
,BALANCINGDAMPER
,BLASTDAMPER
,CONTROLDAMPER
,FIREDAMPER
,FIRESMOKEDAMPER
,FUMEHOODEXHAUST
,GRAVITYDAMPER
,GRAVITYRELIEFDAMPER
,RELIEFDAMPER
,SMOKEDAMPER
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
