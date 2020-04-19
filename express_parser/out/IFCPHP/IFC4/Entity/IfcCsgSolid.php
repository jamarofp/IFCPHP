<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCsgSolid extends IfcSolidModel{

	static public $elementName = 'IFCCSGSOLID';

	static public $translationFR = 'Solid Csg';

	static public $params = [
		[
			'name' => 'TreeRootExpression',
			'class' => 'Type\IfcCsgSelect',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcCsgSolid
SUBTYPE OF (IfcSolidModel);
TreeRootExpression : IfcCsgSelect;
END_ENTITY;
*/
