<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcReinforcementBarProperties extends IfcPreDefinedProperties{

	static public $elementName = 'IFCREINFORCEMENTBARPROPERTIES';

	static public $translationFR = 'Propriétés du ferraillage';

	static public $params = [
		[
			'name' => 'TotalCrossSectionArea',
			'class' => 'Type\IfcAreaMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'SteelGrade',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'BarSurface',
			'class' => 'Type\IfcReinforcingBarSurfaceEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'EffectiveDepth',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'NominalBarDiameter',
			'class' => 'Type\IfcPositiveLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'BarCount',
			'class' => 'Type\IfcCountMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcReinforcementBarProperties
SUBTYPE OF (IfcPreDefinedProperties);
TotalCrossSectionArea : IfcAreaMeasure;
SteelGrade : IfcLabel;
BarSurface : OPTIONAL IfcReinforcingBarSurfaceEnum;
EffectiveDepth : OPTIONAL IfcLengthMeasure;
NominalBarDiameter : OPTIONAL IfcPositiveLengthMeasure;
BarCount : OPTIONAL IfcCountMeasure;
END_ENTITY;
*/
