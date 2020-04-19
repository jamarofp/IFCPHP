<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcProductRepresentation extends IFC\Common{

	static public $elementName = 'IFCPRODUCTREPRESENTATION';

	static public $translationFR = 'Représentation du produit';

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
	];
}
/* SUPERTYPE
	IfcMaterialDefinitionRepresentation
	IfcProductDefinitionShape
*/


/* DEFINITION
ENTITY IfcProductRepresentation
ABSTRACT SUPERTYPE OF (ONEOF
(IfcMaterialDefinitionRepresentation
,IfcProductDefinitionShape));
Name : OPTIONAL IfcLabel;
Description : OPTIONAL IfcText;
Representations : LIST [1:?] OF IfcRepresentation;
END_ENTITY;
*/
