<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcAssemblyPlaceEnum extends IFC\Common{

	static public $elementName = 'IFCASSEMBLYPLACEENUM';

	static public $translationFR = 'Enumération des lieux d\'assemblage';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'SITE',
			'FACTORY',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcAssemblyPlaceEnum = ENUMERATION OF
(SITE
,FACTORY
,NOTDEFINED);
END_TYPE;
*/
