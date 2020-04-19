<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMaterialProfileSet extends IfcMaterialDefinition{

	static public $elementName = 'IFCMATERIALPROFILESET';

	static public $translationFR = 'Ensemble de matériaux de profi';

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
			'name' => 'MaterialProfiles',
			'class' => 'Entity\IfcMaterialProfile',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'CompositeProfile',
			'class' => 'Entity\IfcCompositeProfileDef',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcMaterialProfileSet
SUBTYPE OF (IfcMaterialDefinition);
Name : OPTIONAL IfcLabel;
Description : OPTIONAL IfcText;
MaterialProfiles : LIST [1:?] OF IfcMaterialProfile;
CompositeProfile : OPTIONAL IfcCompositeProfileDef;
END_ENTITY;
*/
