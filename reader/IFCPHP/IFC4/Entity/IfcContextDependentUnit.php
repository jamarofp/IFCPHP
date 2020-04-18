<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcContextDependentUnit extends IfcNamedUnit{

	static public $translationFR = 'Unité dépendant du contexte';

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
	];
}
/* DEFINITION
ENTITY IfcContextDependentUnit
SUBTYPE OF (IfcNamedUnit);
Name : IfcLabel;
INVERSE
HasExternalReference : SET [0:?] OF IfcExternalReferenceRelationship FOR RelatedResourceObjects;
END_ENTITY;
*/
