<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMaterialClassificationRelationship extends IFC\Common{

	static public $elementName = 'IFCMATERIALCLASSIFICATIONRELATIONSHIP';

	static public $translationFR = 'Assignation de classification à un matériau';

	static public $params = [
		[
			'name' => 'MaterialClassifications',
			'class' => 'Type\IfcClassificationSelect',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'ClassifiedMaterial',
			'class' => 'Entity\IfcMaterial',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcMaterialClassificationRelationship;
MaterialClassifications : SET [1:?] OF IfcClassificationSelect;
ClassifiedMaterial : IfcMaterial;
END_ENTITY;
*/
