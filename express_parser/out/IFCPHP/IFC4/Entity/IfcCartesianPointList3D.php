<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCartesianPointList3D extends IfcCartesianPointList{

	static public $elementName = 'IFCCARTESIANPOINTLIST3D';

	static public $params = [
		[
			'name' => 'CoordList',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'array',
			'optional' => false,
			'min' => 3,
			'max' => 3,
		],
	];
}
/* DEFINITION
ENTITY IfcCartesianPointList3D
SUBTYPE OF (IfcCartesianPointList);
CoordList : LIST [1:?] OF LIST [3:3] OF IfcLengthMeasure;
END_ENTITY;
*/
