<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDistributionChamberElementTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types d\'élément de chambre de distribution';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'FORMEDDUCT',
			'INSPECTIONCHAMBER',
			'INSPECTIONPIT',
			'MANHOLE',
			'METERCHAMBER',
			'SUMP',
			'TRENCH',
			'VALVECHAMBER',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcDistributionChamberElementTypeEnum = ENUMERATION OF
(FORMEDDUCT
,INSPECTIONCHAMBER
,INSPECTIONPIT
,MANHOLE
,METERCHAMBER
,SUMP
,TRENCH
,VALVECHAMBER
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
