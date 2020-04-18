<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSIPrefix extends IFC\Common{

	static public $translationFR = 'Préfixe d\'unité internationale';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'EXA',
			'PETA',
			'TERA',
			'GIGA',
			'MEGA',
			'KILO',
			'HECTO',
			'DECA',
			'DECI',
			'CENTI',
			'MILLI',
			'MICRO',
			'NANO',
			'PICO',
			'FEMTO',
			'ATTO',
		],
	]];
}
/* DEFINITION
TYPE IfcSIPrefix = ENUMERATION OF
(EXA
,PETA
,TERA
,GIGA
,MEGA
,KILO
,HECTO
,DECA
,DECI
,CENTI
,MILLI
,MICRO
,NANO
,PICO
,FEMTO
,ATTO);
END_TYPE;
*/
