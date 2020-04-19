<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSIUnitName extends IFC\Common{

	static public $elementName = 'IFCSIUNITNAME';

	static public $translationFR = 'Nom d\'unité du système internationa';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'AMPERE',
			'BECQUEREL',
			'CANDELA',
			'COULOMB',
			'CUBIC_METRE',
			'DEGREE_CELSIUS',
			'FARAD',
			'GRAM',
			'GRAY',
			'HENRY',
			'HERTZ',
			'JOULE',
			'KELVIN',
			'LUMEN',
			'LUX',
			'METRE',
			'MOLE',
			'NEWTON',
			'OHM',
			'PASCAL',
			'RADIAN',
			'SECOND',
			'SIEMENS',
			'SIEVERT',
			'SQUARE_METRE',
			'STERADIAN',
			'TESLA',
			'VOLT',
			'WATT',
			'WEBER',
		],
	]];
}
/* DEFINITION
TYPE IfcSIUnitName = ENUMERATION OF
(AMPERE
,BECQUEREL
,CANDELA
,COULOMB
,CUBIC_METRE
,DEGREE_CELSIUS
,FARAD
,GRAM
,GRAY
,HENRY
,HERTZ
,JOULE
,KELVIN
,LUMEN
,LUX
,METRE
,MOLE
,NEWTON
,OHM
,PASCAL
,RADIAN
,SECOND
,SIEMENS
,SIEVERT
,SQUARE_METRE
,STERADIAN
,TESLA
,VOLT
,WATT
,WEBER);
END_TYPE;
*/
