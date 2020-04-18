<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcGridPlacement extends IfcObjectPlacement{

	static public $translationFR = 'Positionnement de grille';

	static public $params = [
		[
			'name' => 'PlacementLocation',
			'class' => 'Entity\IfcVirtualGridIntersection',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'PlacementRefDirection',
			'class' => 'Type\IfcGridPlacementDirectionSelect',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcGridPlacement
SUBTYPE OF (IfcObjectPlacement);
PlacementLocation : IfcVirtualGridIntersection;
PlacementRefDirection : OPTIONAL IfcGridPlacementDirectionSelect;
END_ENTITY;
*/
