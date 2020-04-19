<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSectionedSpine extends IfcGeometricRepresentationItem{

	static public $elementName = 'IFCSECTIONEDSPINE';

	static public $params = [
		[
			'name' => 'SpineCurve',
			'class' => 'Entity\IfcCompositeCurve',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'CrossSections',
			'class' => 'Entity\IfcProfileDef',
			'type' => 'array',
			'optional' => false,
			'min' => 2,
		],
		[
			'name' => 'CrossSectionPositions',
			'class' => 'Entity\IfcAxis2Placement3D',
			'type' => 'array',
			'optional' => false,
			'min' => 2,
		],
	];
}
/* DEFINITION
ENTITY IfcSectionedSpine
SUBTYPE OF (IfcGeometricRepresentationItem);
SpineCurve : IfcCompositeCurve;
CrossSections : LIST [2:?] OF IfcProfileDef;
CrossSectionPositions : LIST [2:?] OF IfcAxis2Placement3D;
DERIVE
Dim : IfcDimensionCount := 3;
WHERE
CorrespondingSectionPositions : SIZEOF(CrossSections) = SIZEOF(CrossSectionPositions);
ConsistentProfileTypes : SIZEOF(QUERY(temp <* CrossSections | CrossSections[1].ProfileType <> temp.ProfileType)) = 0;
SpineCurveDim : SpineCurve.Dim = 3;
END_ENTITY;
*/
