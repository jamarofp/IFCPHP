<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLogicalOperatorEnum extends IFC\Common{

	static public $translationFR = 'Enumération des opérateurs logiques';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'LOGICALAND',
			'LOGICALOR',
			'LOGICALXOR',
			'LOGICALNOTAND',
			'LOGICALNOTOR',
		],
	]];
}
/* DEFINITION
TYPE IfcLogicalOperatorEnum = ENUMERATION OF
(LOGICALAND
,LOGICALOR
,LOGICALXOR
,LOGICALNOTAND
,LOGICALNOTOR);
END_TYPE;
*/
