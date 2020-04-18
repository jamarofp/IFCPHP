<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcDerivedUnit extends IFC\Common{

	static public $translationFR = 'Unité dérivée';

	static public $params = [
		[
			'name' => 'Elements',
			'class' => 'Entity\IfcDerivedUnitElement',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'UnitType',
			'class' => 'Type\IfcDerivedUnitEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'UserDefinedType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcDerivedUnit;
Elements : SET [1:?] OF IfcDerivedUnitElement;
UnitType : IfcDerivedUnitEnum;
UserDefinedType : OPTIONAL IfcLabel;
DERIVE
Dimensions : IfcDimensionalExponents := IfcDeriveDimensionalExponents(Elements);
WHERE
WR1 : (SIZEOF (Elements) > 1) OR ((SIZEOF (Elements) = 1) AND (Elements[1].Exponent <> 1 ));
WR2 : (UnitType <> IfcDerivedUnitEnum.USERDEFINED) OR
((UnitType = IfcDerivedUnitEnum.USERDEFINED) AND
(EXISTS(SELF.UserDefinedType)));
END_ENTITY;
*/
