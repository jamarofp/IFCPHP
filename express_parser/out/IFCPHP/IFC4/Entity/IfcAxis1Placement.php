<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcAxis1Placement extends IfcPlacement{

	static public $elementName = 'IFCAXIS1PLACEMENT';

	static public $translationFR = 'Position et direction d\'un axe';

	static public $params = [
		[
			'name' => 'Location',
			'class' => 'Entity\IfcCartesianPoint',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Axis',
			'class' => 'Entity\IfcDirection',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcAxis1Placement
SUBTYPE OF (IfcPlacement);
Axis : OPTIONAL IfcDirection;
DERIVE
Z : IfcDirection := NVL (IfcNormalise(Axis), IfcRepresentationItem() || IfcGeometricRepresentationItem () || IfcDirection([0.0,0.0,1.0]));
WHERE
AxisIs3D : (NOT (EXISTS (Axis))) OR (Axis.Dim = 3);
LocationIs3D : SELF\IfcPlacement.Location.Dim = 3;
END_ENTITY;
*/
