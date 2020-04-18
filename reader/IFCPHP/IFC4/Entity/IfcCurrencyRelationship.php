<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCurrencyRelationship extends IfcResourceLevelRelationship{

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Description',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RelatingMonetaryUnit',
			'class' => 'Entity\IfcMonetaryUnit',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatedMonetaryUnit',
			'class' => 'Entity\IfcMonetaryUnit',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ExchangeRate',
			'class' => 'Type\IfcPositiveRatioMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RateDateTime',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RateSource',
			'class' => 'Entity\IfcLibraryInformation',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcCurrencyRelationship
SUBTYPE OF (IfcResourceLevelRelationship);
RelatingMonetaryUnit : IfcMonetaryUnit;
RelatedMonetaryUnit : IfcMonetaryUnit;
ExchangeRate : IfcPositiveRatioMeasure;
RateDateTime : OPTIONAL IfcDateTime;
RateSource : OPTIONAL IfcLibraryInformation;
END_ENTITY;
*/
