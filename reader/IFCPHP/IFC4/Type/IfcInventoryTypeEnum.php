<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcInventoryTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types d\'inventaire';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ASSETINVENTORY',
			'SPACEINVENTORY',
			'FURNITUREINVENTORY',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcInventoryTypeEnum = ENUMERATION OF
(ASSETINVENTORY
,SPACEINVENTORY
,FURNITUREINVENTORY
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
