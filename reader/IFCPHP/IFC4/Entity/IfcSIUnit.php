<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSIUnit extends IfcNamedUnit{

	static public $translationFR = 'Unité du système internationa';

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
		[
			'name' => 'Prefix',
			'class' => 'Type\IfcSIPrefix',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Name',
			'class' => 'Type\IfcSIUnitName',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcSIUnit
SUBTYPE OF (IfcNamedUnit);
Prefix : OPTIONAL IfcSIPrefix;
Name : IfcSIUnitName;
DERIVE
SELF\IfcNamedUnit.Dimensions : IfcDimensionalExponents := IfcDimensionsForSiUnit (SELF.Name);
END_ENTITY;
*/
