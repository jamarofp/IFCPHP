<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcConic extends IfcCurve{

	static public $elementName = 'IFCCONIC';

	static public $translationFR = 'Conique';

	static public $params = [
		[
			'name' => 'Position',
			'class' => 'Type\IfcAxis2Placement',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcCircle
	IfcEllipse
*/


/* DEFINITION
ENTITY IfcConic
ABSTRACT SUPERTYPE OF (ONEOF
(IfcCircle
,IfcEllipse))
SUBTYPE OF (IfcCurve);
Position : IfcAxis2Placement;
END_ENTITY;
*/
