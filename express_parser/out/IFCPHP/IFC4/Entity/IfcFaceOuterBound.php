<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcFaceOuterBound extends IfcFaceBound{

	static public $elementName = 'IFCFACEOUTERBOUND';

	static public $translationFR = 'Contour extérieur de face';

	static public $params = [
		[
			'name' => 'Bound',
			'class' => 'Entity\IfcLoop',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Orientation',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcFaceOuterBound
SUBTYPE OF (IfcFaceBound);
END_ENTITY;
*/
