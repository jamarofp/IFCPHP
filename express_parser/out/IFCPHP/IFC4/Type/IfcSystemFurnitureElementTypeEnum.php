<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSystemFurnitureElementTypeEnum extends IFC\Common{

	static public $elementName = 'IFCSYSTEMFURNITUREELEMENTTYPEENUM';

	static public $translationFR = 'Enumération des types d\'élément de l\'ameublement';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'PANEL',
			'WORKSURFACE',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcSystemFurnitureElementTypeEnum = ENUMERATION OF
(PANEL
,WORKSURFACE
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
