<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTriangulatedFaceSet extends IfcTessellatedFaceSet{

	static public $translationFR = 'Ensemble de faces triangulées';

	static public $params = [
		[
			'name' => 'Coordinates',
			'class' => 'Entity\IfcCartesianPointList3D',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Normals',
			'class' => 'Type\IfcParameterValue',
			'type' => 'array',
			'optional' => true,
			'min' => 3,
			'max' => 3,
		],
		[
			'name' => 'Closed',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CoordIndex',
			'class' => 'Base\Integer',
			'type' => 'array',
			'optional' => false,
			'min' => 3,
			'max' => 3,
		],
		[
			'name' => 'NormalIndex',
			'class' => 'Base\Integer',
			'type' => 'array',
			'optional' => true,
			'min' => 3,
			'max' => 3,
		],
	];
}
/* DEFINITION
ENTITY IfcTriangulatedFaceSet
SUBTYPE OF (IfcTessellatedFaceSet);
CoordIndex : LIST [1:?] OF LIST [3:3] OF INTEGER;
NormalIndex : OPTIONAL LIST [1:?] OF LIST [3:3] OF INTEGER;
DERIVE
NumberOfTriangles : INTEGER := SIZEOF(CoordIndex);
END_ENTITY;
*/
