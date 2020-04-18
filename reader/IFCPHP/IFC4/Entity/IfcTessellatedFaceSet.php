<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTessellatedFaceSet extends IfcTessellatedItem{

	static public $translationFR = 'Ensemble de faces tessellées';

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
	];
}
/* SUPERTYPE
	IfcTriangulatedFaceSet
*/


/* DEFINITION
ENTITY IfcTessellatedFaceSet
ABSTRACT SUPERTYPE OF (ONEOF
(IfcTriangulatedFaceSet))
SUBTYPE OF (IfcTessellatedItem);
Coordinates : IfcCartesianPointList3D;
Normals : OPTIONAL LIST [1:?] OF LIST [3:3] OF IfcParameterValue;
Closed : OPTIONAL BOOLEAN;
INVERSE
HasColours : SET [0:1] OF IfcIndexedColourMap FOR MappedTo;
HasTextures : SET [0:?] OF IfcIndexedTextureMap FOR MappedTo;
END_ENTITY;
*/
