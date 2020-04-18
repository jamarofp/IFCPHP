<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBooleanResult extends IfcGeometricRepresentationItem{

	static public $translationFR = 'Résultat booléen';

	static public $params = [
		[
			'name' => 'Operator',
			'class' => 'Type\IfcBooleanOperator',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'FirstOperand',
			'class' => 'Type\IfcBooleanOperand',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'SecondOperand',
			'class' => 'Type\IfcBooleanOperand',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcBooleanClippingResult
*/


/* DEFINITION
ENTITY IfcBooleanResult
SUPERTYPE OF (ONEOF
(IfcBooleanClippingResult))
SUBTYPE OF (IfcGeometricRepresentationItem);
Operator : IfcBooleanOperator;
FirstOperand : IfcBooleanOperand;
SecondOperand : IfcBooleanOperand;
DERIVE
Dim : IfcDimensionCount := FirstOperand.Dim;
WHERE
SameDim : FirstOperand.Dim = SecondOperand.Dim;
END_ENTITY;
*/
