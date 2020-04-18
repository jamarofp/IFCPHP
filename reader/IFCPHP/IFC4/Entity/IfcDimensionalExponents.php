<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcDimensionalExponents extends IFC\Common{

	static public $translationFR = 'exposants dimensionnels';

	static public $params = [
		[
			'name' => 'LengthExponent',
			'class' => 'Base\Integer',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'MassExponent',
			'class' => 'Base\Integer',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'TimeExponent',
			'class' => 'Base\Integer',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ElectricCurrentExponent',
			'class' => 'Base\Integer',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ThermodynamicTemperatureExponent',
			'class' => 'Base\Integer',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'AmountOfSubstanceExponent',
			'class' => 'Base\Integer',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'LuminousIntensityExponent',
			'class' => 'Base\Integer',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcDimensionalExponents;
LengthExponent : INTEGER;
MassExponent : INTEGER;
TimeExponent : INTEGER;
ElectricCurrentExponent : INTEGER;
ThermodynamicTemperatureExponent : INTEGER;
AmountOfSubstanceExponent : INTEGER;
LuminousIntensityExponent : INTEGER;
END_ENTITY;
*/
