<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcFillAreaStyle extends IfcPresentationStyle{

	static public $elementName = 'IFCFILLAREASTYLE';

	static public $translationFR = 'Style de remplissage de surface';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'FillStyles',
			'class' => 'Type\IfcFillStyleSelect',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'ModelorDraughting',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcFillAreaStyle
SUBTYPE OF (IfcPresentationStyle);
FillStyles : SET [1:?] OF IfcFillStyleSelect;
ModelorDraughting : OPTIONAL BOOLEAN;
WHERE
MaxOneColour : SIZEOF(QUERY(Style <* SELF.FillStyles |
'IFC4.IFCCOLOUR' IN
TYPEOF(Style)
)) <= 1;
MaxOneExtHatchStyle : SIZEOF(QUERY(Style <* SELF.FillStyles |
'IFC4.IFCEXTERNALLYDEFINEDHATCHSTYLE' IN
TYPEOF(Style)
)) <= 1;
ConsistentHatchStyleDef : IfcCorrectFillAreaStyle(SELF.FillStyles);
END_ENTITY;
*/
