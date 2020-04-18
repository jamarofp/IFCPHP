<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcConversionBasedUnit extends IfcNamedUnit{

	static public $translationFR = 'Unité basée sur une mesure avec unité';

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
	];
}
/* SUPERTYPE
	IfcConversionBasedUnitWithOffset
*/


/* DEFINITION
ENTITY IfcConversionBasedUnit
SUPERTYPE OF (ONEOF
(IfcConversionBasedUnitWithOffset))
SUBTYPE OF (IfcNamedUnit);
Name : IfcLabel;
ConversionFactor : IfcMeasureWithUnit;
INVERSE
HasExternalReference : SET [0:?] OF IfcExternalReferenceRelationship FOR RelatedResourceObjects;
END_ENTITY;
*/
