<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTextTransformation extends IFC\Common{

	static public $translationFR = 'Transformation de texte';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'capitalize',
			'uppercase',
			'lowercase',
			'none',
		],
	]];
}
/* DEFINITION
TYPE IfcTextTransformation = STRING;
WHERE
WR1 : SELF IN ['capitalize', 'uppercase', 'lowercase', 'none'];
END_TYPE;
*/
