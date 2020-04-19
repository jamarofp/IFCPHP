<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSectionProperties extends IfcPreDefinedProperties{

	static public $elementName = 'IFCSECTIONPROPERTIES';

	static public $translationFR = 'Propriétés de section';

	static public $params = [
		[
			'name' => 'SectionType',
			'class' => 'Type\IfcSectionTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'StartProfile',
			'class' => 'Entity\IfcProfileDef',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'EndProfile',
			'class' => 'Entity\IfcProfileDef',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcSectionProperties
SUBTYPE OF (IfcPreDefinedProperties);
SectionType : IfcSectionTypeEnum;
StartProfile : IfcProfileDef;
EndProfile : OPTIONAL IfcProfileDef;
END_ENTITY;
*/
