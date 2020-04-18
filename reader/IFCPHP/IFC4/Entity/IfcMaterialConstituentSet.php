<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMaterialConstituentSet extends IfcMaterialDefinition{

	static public $translationFR = 'Ensemble de matériaux constitutifs';

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
			'name' => 'MaterialConstituents',
			'class' => 'Entity\IfcMaterialConstituent',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcMaterialConstituentSet
SUBTYPE OF (IfcMaterialDefinition);
Name : OPTIONAL IfcLabel;
Description : OPTIONAL IfcText;
MaterialConstituents : OPTIONAL SET [1:?] OF IfcMaterialConstituent;
END_ENTITY;
*/
