<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBoundaryEdgeCondition extends IfcBoundaryCondition{

	static public $elementName = 'IFCBOUNDARYEDGECONDITION';

	static public $translationFR = 'Condition d\'arête limite';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TranslationalStiffnessByLengthX',
			'class' => 'Type\IfcModulusOfTranslationalSubgradeReactionSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TranslationalStiffnessByLengthY',
			'class' => 'Type\IfcModulusOfTranslationalSubgradeReactionSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TranslationalStiffnessByLengthZ',
			'class' => 'Type\IfcModulusOfTranslationalSubgradeReactionSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RotationalStiffnessByLengthX',
			'class' => 'Type\IfcModulusOfRotationalSubgradeReactionSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RotationalStiffnessByLengthY',
			'class' => 'Type\IfcModulusOfRotationalSubgradeReactionSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RotationalStiffnessByLengthZ',
			'class' => 'Type\IfcModulusOfRotationalSubgradeReactionSelect',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcBoundaryEdgeCondition
SUBTYPE OF (IfcBoundaryCondition);
TranslationalStiffnessByLengthX : OPTIONAL IfcModulusOfTranslationalSubgradeReactionSelect;
TranslationalStiffnessByLengthY : OPTIONAL IfcModulusOfTranslationalSubgradeReactionSelect;
TranslationalStiffnessByLengthZ : OPTIONAL IfcModulusOfTranslationalSubgradeReactionSelect;
RotationalStiffnessByLengthX : OPTIONAL IfcModulusOfRotationalSubgradeReactionSelect;
RotationalStiffnessByLengthY : OPTIONAL IfcModulusOfRotationalSubgradeReactionSelect;
RotationalStiffnessByLengthZ : OPTIONAL IfcModulusOfRotationalSubgradeReactionSelect;
END_ENTITY;
*/
