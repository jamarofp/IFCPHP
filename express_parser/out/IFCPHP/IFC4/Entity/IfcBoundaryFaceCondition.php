<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBoundaryFaceCondition extends IfcBoundaryCondition{

	static public $elementName = 'IFCBOUNDARYFACECONDITION';

	static public $translationFR = 'Condition de face limite';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TranslationalStiffnessByAreaX',
			'class' => 'Type\IfcModulusOfSubgradeReactionSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TranslationalStiffnessByAreaY',
			'class' => 'Type\IfcModulusOfSubgradeReactionSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TranslationalStiffnessByAreaZ',
			'class' => 'Type\IfcModulusOfSubgradeReactionSelect',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcBoundaryFaceCondition
SUBTYPE OF (IfcBoundaryCondition);
TranslationalStiffnessByAreaX : OPTIONAL IfcModulusOfSubgradeReactionSelect;
TranslationalStiffnessByAreaY : OPTIONAL IfcModulusOfSubgradeReactionSelect;
TranslationalStiffnessByAreaZ : OPTIONAL IfcModulusOfSubgradeReactionSelect;
END_ENTITY;
*/
