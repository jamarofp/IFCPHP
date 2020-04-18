<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTrimmedCurve extends IfcBoundedCurve{

	static public $translationFR = 'Courbe de rognage';

	static public $params = [
		[
			'name' => 'BasisCurve',
			'class' => 'Entity\IfcCurve',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Trim1',
			'class' => 'Type\IfcTrimmingSelect',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
			'max' => 2,
		],
		[
			'name' => 'Trim2',
			'class' => 'Type\IfcTrimmingSelect',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
			'max' => 2,
		],
		[
			'name' => 'SenseAgreement',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'MasterRepresentation',
			'class' => 'Type\IfcTrimmingPreference',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcTrimmedCurve
SUBTYPE OF (IfcBoundedCurve);
BasisCurve : IfcCurve;
Trim1 : SET [1:2] OF IfcTrimmingSelect;
Trim2 : SET [1:2] OF IfcTrimmingSelect;
SenseAgreement : BOOLEAN;
MasterRepresentation : IfcTrimmingPreference;
WHERE
Trim1ValuesConsistent : (HIINDEX(Trim1) = 1) OR (TYPEOF(Trim1[1]) <> TYPEOF(Trim1[2]));
Trim2ValuesConsistent : (HIINDEX(Trim2) = 1) OR (TYPEOF(Trim2[1]) <> TYPEOF(Trim2[2]));
NoTrimOfBoundedCurves : NOT('IFC4.IFCBOUNDEDCURVE' IN TYPEOF(BasisCurve));
END_ENTITY;
*/
