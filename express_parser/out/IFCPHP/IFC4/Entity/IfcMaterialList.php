<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMaterialList extends IFC\Common{

	static public $elementName = 'IFCMATERIALLIST';

	static public $translationFR = 'Liste de matériaux';

	static public $params = [
		[
			'name' => 'Materials',
			'class' => 'Entity\IfcMaterial',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcMaterialList;
Materials : LIST [1:?] OF IfcMaterial;
END_ENTITY;
*/
