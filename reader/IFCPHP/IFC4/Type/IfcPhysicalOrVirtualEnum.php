<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPhysicalOrVirtualEnum extends IFC\Common{

	static public $translationFR = 'Physique ou virtuelle';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'PHYSICAL',
			'VIRTUAL',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcPhysicalOrVirtualEnum = ENUMERATION OF
(PHYSICAL
,VIRTUAL
,NOTDEFINED);
END_TYPE;
*/
