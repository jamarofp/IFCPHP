<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSlippageConnectionCondition extends IfcStructuralConnectionCondition{

	static public $elementName = 'IFCSLIPPAGECONNECTIONCONDITION';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'SlippageX',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'SlippageY',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'SlippageZ',
			'class' => 'Type\IfcLengthMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcSlippageConnectionCondition
SUBTYPE OF (IfcStructuralConnectionCondition);
SlippageX : OPTIONAL IfcLengthMeasure;
SlippageY : OPTIONAL IfcLengthMeasure;
SlippageZ : OPTIONAL IfcLengthMeasure;
END_ENTITY;
*/
