<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcLocalPlacement extends IfcObjectPlacement{

	static public $translationFR = 'Positionnement loca';

	static public $params = [
		[
			'name' => 'PlacementRelTo',
			'class' => 'Entity\IfcObjectPlacement',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RelativePlacement',
			'class' => 'Type\IfcAxis2Placement',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcLocalPlacement
SUBTYPE OF (IfcObjectPlacement);
PlacementRelTo : OPTIONAL IfcObjectPlacement;
RelativePlacement : IfcAxis2Placement;
WHERE
WR21 : IfcCorrectLocalPlacement(RelativePlacement, PlacementRelTo);
END_ENTITY;
*/
