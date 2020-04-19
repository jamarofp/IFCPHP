<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcNamedUnit extends IFC\Common{

	static public $elementName = 'IFCNAMEDUNIT';

	static public $translationFR = 'Unité nommée';

	static public $params = [
		[
			'name' => 'Dimensions',
			'class' => 'Entity\IfcDimensionalExponents',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'UnitType',
			'class' => 'Type\IfcUnitEnum',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcContextDependentUnit
	IfcConversionBasedUnit
	IfcSIUnit
*/


/* DEFINITION
ENTITY IfcNamedUnit
ABSTRACT SUPERTYPE OF (ONEOF
(IfcContextDependentUnit
,IfcConversionBasedUnit
,IfcSIUnit));
Dimensions : IfcDimensionalExponents;
UnitType : IfcUnitEnum;
WHERE
WR1 : IfcCorrectDimensions (SELF.UnitType, SELF.Dimensions);
END_ENTITY;
*/
