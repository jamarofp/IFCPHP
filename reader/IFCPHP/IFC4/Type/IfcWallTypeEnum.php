<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcWallTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types de mur';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'MOVABLE',
			'PARAPET',
			'PARTITIONING',
			'PLUMBINGWALL',
			'SHEAR',
			'SOLIDWALL',
			'STANDARD',
			'POLYGONAL',
			'ELEMENTEDWALL',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcWallTypeEnum = ENUMERATION OF
(MOVABLE
,PARAPET
,PARTITIONING
,PLUMBINGWALL
,SHEAR
,SOLIDWALL
,STANDARD
,POLYGONAL
,ELEMENTEDWALL
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
