<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMonetaryUnit extends IFC\Common{

	static public $elementName = 'IFCMONETARYUNIT';

	static public $translationFR = 'Unité monétaire';

	static public $params = [
		[
			'name' => 'Currency',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcMonetaryUnit;
Currency : IfcLabel;
END_ENTITY;
*/
