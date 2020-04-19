<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcReinforcingBarSurfaceEnum extends IFC\Common{

	static public $elementName = 'IFCREINFORCINGBARSURFACEENUM';

	static public $translationFR = 'Enumération des types de surface de barre d\'armature';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'PLAIN',
			'TEXTURED',
		],
	]];
}
/* DEFINITION
TYPE IfcReinforcingBarSurfaceEnum = ENUMERATION OF
(PLAIN
,TEXTURED);
END_TYPE;
*/
