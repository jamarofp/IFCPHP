<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBooleanClippingResult extends IfcBooleanResult{

	static public $translationFR = 'Résultat d\'opération booléen';

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
/* DEFINITION
ENTITY IfcBooleanClippingResult
SUBTYPE OF (IfcBooleanResult);
WHERE
FirstOperandType : ('IFC4.IFCSWEPTAREASOLID' IN TYPEOF(FirstOperand)) OR
('IFC4.IFCSWEPTDISCSOLID' IN TYPEOF(FirstOperand)) OR
('IFC4.IFCBOOLEANCLIPPINGRESULT' IN TYPEOF(FirstOperand));
SecondOperandType : ('IFC4.IFCHALFSPACESOLID' IN TYPEOF(SecondOperand));
OperatorType : Operator = DIFFERENCE;
END_ENTITY;
*/
