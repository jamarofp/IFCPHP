<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcWasteTerminalTypeEnum extends IFC\Common{

	static public $elementName = 'IFCWASTETERMINALTYPEENUM';

	static public $translationFR = 'Enumération des type de stockage de déchets';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'FLOORTRAP',
			'FLOORWASTE',
			'GULLYSUMP',
			'GULLYTRAP',
			'ROOFDRAIN',
			'WASTEDISPOSALUNIT',
			'WASTETRAP',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcWasteTerminalTypeEnum = ENUMERATION OF
(FLOORTRAP
,FLOORWASTE
,GULLYSUMP
,GULLYTRAP
,ROOFDRAIN
,WASTEDISPOSALUNIT
,WASTETRAP
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
