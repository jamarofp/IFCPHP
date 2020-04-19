<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcConstructionEquipmentResourceTypeEnum extends IFC\Common{

	static public $elementName = 'IFCCONSTRUCTIONEQUIPMENTRESOURCETYPEENUM';

	static public $translationFR = 'Énumération des types d\'équipements utilisés pour la construction';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'DEMOLISHING',
			'EARTHMOVING',
			'ERECTING',
			'HEATING',
			'LIGHTING',
			'PAVING',
			'PUMPING',
			'TRANSPORTING',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcConstructionEquipmentResourceTypeEnum = ENUMERATION OF
(DEMOLISHING
,EARTHMOVING
,ERECTING
,HEATING
,LIGHTING
,PAVING
,PUMPING
,TRANSPORTING
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
