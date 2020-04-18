<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPresentationStyleAssignment extends IFC\Common{

	static public $translationFR = 'Assignation d\'un type de présentation';

	static public $params = [
		[
			'name' => 'Styles',
			'class' => 'Type\IfcPresentationStyleSelect',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcPresentationStyleAssignment;
Styles : SET [1:?] OF IfcPresentationStyleSelect;
END_ENTITY;
*/
