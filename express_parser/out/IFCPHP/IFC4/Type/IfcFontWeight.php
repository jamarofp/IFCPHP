<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcFontWeight extends IFC\Common{

	static public $elementName = 'IFCFONTWEIGHT';

	static public $translationFR = 'Graisse de police';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'normal',
			'small-caps',
			'100',
			'200',
			'300',
			'400',
			'500',
			'600',
			'700',
			'800',
			'900',
		],
	]];
}
/* DEFINITION
TYPE IfcFontWeight = STRING;
WHERE
WR1 : SELF IN ['normal','small-caps','100','200','300','400','500','600','700','800','900'];
END_TYPE;
*/
