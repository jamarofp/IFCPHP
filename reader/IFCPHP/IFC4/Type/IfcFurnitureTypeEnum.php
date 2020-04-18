<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcFurnitureTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de mobilier';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CHAIR',
			'TABLE',
			'DESK',
			'BED',
			'FILECABINET',
			'SHELF',
			'SOFA',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcFurnitureTypeEnum = ENUMERATION OF
(CHAIR
,TABLE
,DESK
,BED
,FILECABINET
,SHELF
,SOFA
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
