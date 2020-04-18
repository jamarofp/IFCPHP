<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcReflectanceMethodEnum extends IFC\Common{

	static public $translationFR = 'Enumération des méthodes de réflexion';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'BLINN',
			'FLAT',
			'GLASS',
			'MATT',
			'METAL',
			'MIRROR',
			'PHONG',
			'PLASTIC',
			'STRAUSS',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcReflectanceMethodEnum = ENUMERATION OF
(BLINN
,FLAT
,GLASS
,MATT
,METAL
,MIRROR
,PHONG
,PLASTIC
,STRAUSS
,NOTDEFINED);
END_TYPE;
*/
