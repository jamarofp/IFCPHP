<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcRoofTypeEnum extends IFC\Common{

	static public $translationFR = 'Énumération des types de toiture';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'FLAT_ROOF',
			'SHED_ROOF',
			'GABLE_ROOF',
			'HIP_ROOF',
			'HIPPED_GABLE_ROOF',
			'GAMBREL_ROOF',
			'MANSARD_ROOF',
			'BARREL_ROOF',
			'RAINBOW_ROOF',
			'BUTTERFLY_ROOF',
			'PAVILION_ROOF',
			'DOME_ROOF',
			'FREEFORM',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcRoofTypeEnum = ENUMERATION OF
(FLAT_ROOF
,SHED_ROOF
,GABLE_ROOF
,HIP_ROOF
,HIPPED_GABLE_ROOF
,GAMBREL_ROOF
,MANSARD_ROOF
,BARREL_ROOF
,RAINBOW_ROOF
,BUTTERFLY_ROOF
,PAVILION_ROOF
,DOME_ROOF
,FREEFORM
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
