<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRectangularTrimmedSurface extends IfcBoundedSurface{

	static public $params = [
		[
			'name' => 'BasisSurface',
			'class' => 'Entity\IfcSurface',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'U1',
			'class' => 'Type\IfcParameterValue',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'V1',
			'class' => 'Type\IfcParameterValue',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'U2',
			'class' => 'Type\IfcParameterValue',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'V2',
			'class' => 'Type\IfcParameterValue',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Usense',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Vsense',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRectangularTrimmedSurface
SUBTYPE OF (IfcBoundedSurface);
BasisSurface : IfcSurface;
U1 : IfcParameterValue;
V1 : IfcParameterValue;
U2 : IfcParameterValue;
V2 : IfcParameterValue;
Usense : BOOLEAN;
Vsense : BOOLEAN;
WHERE
U1AndU2Different : U1 <> U2;
V1AndV2Different : V1 <> V2;
UsenseCompatible : (('IFC4.IFCELEMENTARYSURFACE' IN TYPEOF(BasisSurface)) AND
(NOT ('IFC4.IFCPLANE' IN TYPEOF(BasisSurface)))) OR
('IFC4.IFCSURFACEOFREVOLUTION' IN TYPEOF(BasisSurface)) OR
(Usense = (U2 > U1));
VsenseCompatible : Vsense = (V2 > V1);
END_ENTITY;
*/
