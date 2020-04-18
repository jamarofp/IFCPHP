<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTransitionCode extends IFC\Common{

	static public $translationFR = 'Enumération des types de transition';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'DISCONTINUOUS',
			'CONTINUOUS',
			'CONTSAMEGRADIENT',
			'CONTSAMEGRADIENTSAMECURVATURE',
		],
	]];
}
/* DEFINITION
TYPE IfcTransitionCode = ENUMERATION OF
(DISCONTINUOUS
,CONTINUOUS
,CONTSAMEGRADIENT
,CONTSAMEGRADIENTSAMECURVATURE);
END_TYPE;
*/
