<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcProductDefinitionShape extends IfcProductRepresentation{

	static public $elementName = 'IFCPRODUCTDEFINITIONSHAPE';

	static public $translationFR = 'Représentation de la forme du produit';

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
/* DEFINITION
ENTITY IfcProductDefinitionShape
SUBTYPE OF (IfcProductRepresentation);
INVERSE
ShapeOfProduct : SET [1:?] OF IfcProduct FOR Representation;
HasShapeAspects : SET [0:?] OF IfcShapeAspect FOR PartOfProductDefinitionShape;
WHERE
OnlyShapeModel : SIZEOF(QUERY(temp <* Representations |
(NOT('IFC4.IFCSHAPEMODEL' IN TYPEOF(temp)))
)) = 0;
END_ENTITY;
*/
