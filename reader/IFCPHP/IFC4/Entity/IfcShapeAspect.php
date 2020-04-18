<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcShapeAspect extends IFC\Common{

	static public $translationFR = 'Aspect de forme';

	static public $params = [
		[
			'name' => 'ShapeRepresentations',
			'class' => 'Entity\IfcShapeModel',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
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
			'name' => 'ProductDefinitional',
			'class' => 'Base\Logical',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'PartOfProductDefinitionShape',
			'class' => 'Type\IfcProductRepresentationSelect',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcShapeAspect;
ShapeRepresentations : LIST [1:?] OF IfcShapeModel;
Name : OPTIONAL IfcLabel;
Description : OPTIONAL IfcText;
ProductDefinitional : LOGICAL;
PartOfProductDefinitionShape : OPTIONAL IfcProductRepresentationSelect;
END_ENTITY;
*/
