<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcElementAssemblyTypeEnum extends IFC\Common{

	static public $elementName = 'IFCELEMENTASSEMBLYTYPEENUM';

	static public $translationFR = 'Énumération des types d\'assemblage d\' éléments';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ACCESSORY_ASSEMBLY',
			'ARCH',
			'BEAM_GRID',
			'BRACED_FRAME',
			'GIRDER',
			'REINFORCEMENT_UNIT',
			'RIGID_FRAME',
			'SLAB_FIELD',
			'TRUSS',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcElementAssemblyTypeEnum = ENUMERATION OF
(ACCESSORY_ASSEMBLY
,ARCH
,BEAM_GRID
,BRACED_FRAME
,GIRDER
,REINFORCEMENT_UNIT
,RIGID_FRAME
,SLAB_FIELD
,TRUSS
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
