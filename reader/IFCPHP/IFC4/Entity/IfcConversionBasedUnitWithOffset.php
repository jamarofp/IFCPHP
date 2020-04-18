<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcConversionBasedUnitWithOffset extends IfcConversionBasedUnit{

	static public $translationFR = 'Unité basée sur une mesure avec unité et avec décalage';

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
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ConversionFactor',
			'class' => 'Entity\IfcMeasureWithUnit',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ConversionOffset',
			'class' => 'Type\IfcReal',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcConversionBasedUnitWithOffset
SUBTYPE OF (IfcConversionBasedUnit);
ConversionOffset : IfcReal;
END_ENTITY;
*/
