<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcDerivedUnitElement extends IFC\Common{

	static public $translationFR = 'Elément d\'unité dérivée';

	static public $params = [
		[
			'name' => 'Unit',
			'class' => 'Entity\IfcNamedUnit',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Exponent',
			'class' => 'Base\Integer',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcDerivedUnitElement;
Unit : IfcNamedUnit;
Exponent : INTEGER;
END_ENTITY;
*/
