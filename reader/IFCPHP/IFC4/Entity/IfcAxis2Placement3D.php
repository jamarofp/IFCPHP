<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcAxis2Placement3D extends IfcPlacement{

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
		[
			'name' => 'RefDirection',
			'class' => 'Entity\IfcDirection',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcAxis2Placement3D
SUBTYPE OF (IfcPlacement);
Axis : OPTIONAL IfcDirection;
RefDirection : OPTIONAL IfcDirection;
DERIVE
P : LIST [3:3] OF IfcDirection := IfcBuildAxes(Axis, RefDirection);
WHERE
LocationIs3D : SELF\IfcPlacement.Location.Dim = 3;
AxisIs3D : (NOT (EXISTS (Axis))) OR (Axis.Dim = 3);
RefDirIs3D : (NOT (EXISTS (RefDirection))) OR (RefDirection.Dim = 3);
AxisToRefDirPosition : (NOT (EXISTS (Axis))) OR (NOT (EXISTS (RefDirection))) OR (IfcCrossProduct(Axis,RefDirection).Magnitude > 0.0);
AxisAndRefDirProvision : NOT ((EXISTS (Axis)) XOR (EXISTS (RefDirection)));
END_ENTITY;
*/
