<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMaterialDefinitionRepresentation extends IfcProductRepresentation{

	static public $translationFR = 'Représentation de définition de matériau';

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
			'name' => 'Representations',
			'class' => 'Entity\IfcRepresentation',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'RepresentedMaterial',
			'class' => 'Entity\IfcMaterial',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcMaterialDefinitionRepresentation
SUBTYPE OF (IfcProductRepresentation);
RepresentedMaterial : IfcMaterial;
WHERE
OnlyStyledRepresentations : SIZEOF(QUERY(temp <* Representations |
(NOT('IFC4.IFCSTYLEDREPRESENTATION' IN TYPEOF(temp)))
)) = 0;
END_ENTITY;
*/
