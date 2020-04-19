<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSectionReinforcementProperties extends IfcPreDefinedProperties{

	static public $elementName = 'IFCSECTIONREINFORCEMENTPROPERTIES';

	static public $params = [
		[
			'name' => 'LongitudinalStartPosition',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'LongitudinalEndPosition',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'TransversePosition',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ReinforcementRole',
			'class' => 'Type\IfcReinforcingBarRoleEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'SectionDefinition',
			'class' => 'Entity\IfcSectionProperties',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'CrossSectionReinforcementDefinitions',
			'class' => 'Entity\IfcReinforcementBarProperties',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcSectionReinforcementProperties
SUBTYPE OF (IfcPreDefinedProperties);
LongitudinalStartPosition : IfcLengthMeasure;
LongitudinalEndPosition : IfcLengthMeasure;
TransversePosition : OPTIONAL IfcLengthMeasure;
ReinforcementRole : IfcReinforcingBarRoleEnum;
SectionDefinition : IfcSectionProperties;
CrossSectionReinforcementDefinitions : SET [1:?] OF IfcReinforcementBarProperties;
END_ENTITY;
*/
