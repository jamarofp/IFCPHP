<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCompressorTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de compresseur';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'DYNAMIC',
			'RECIPROCATING',
			'ROTARY',
			'SCROLL',
			'TROCHOIDAL',
			'SINGLESTAGE',
			'BOOSTER',
			'OPENTYPE',
			'HERMETIC',
			'SEMIHERMETIC',
			'WELDEDSHELLHERMETIC',
			'ROLLINGPISTON',
			'ROTARYVANE',
			'SINGLESCREW',
			'TWINSCREW',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcCompressorTypeEnum = ENUMERATION OF
(DYNAMIC
,RECIPROCATING
,ROTARY
,SCROLL
,TROCHOIDAL
,SINGLESTAGE
,BOOSTER
,OPENTYPE
,HERMETIC
,SEMIHERMETIC
,WELDEDSHELLHERMETIC
,ROLLINGPISTON
,ROTARYVANE
,SINGLESCREW
,TWINSCREW
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
