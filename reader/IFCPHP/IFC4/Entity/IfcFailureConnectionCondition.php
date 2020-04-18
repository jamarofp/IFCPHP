<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcFailureConnectionCondition extends IfcStructuralConnectionCondition{

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TensionFailureX',
			'class' => 'Type\IfcForceMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TensionFailureY',
			'class' => 'Type\IfcForceMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TensionFailureZ',
			'class' => 'Type\IfcForceMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CompressionFailureX',
			'class' => 'Type\IfcForceMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CompressionFailureY',
			'class' => 'Type\IfcForceMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CompressionFailureZ',
			'class' => 'Type\IfcForceMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcFailureConnectionCondition
SUBTYPE OF (IfcStructuralConnectionCondition);
TensionFailureX : OPTIONAL IfcForceMeasure;
TensionFailureY : OPTIONAL IfcForceMeasure;
TensionFailureZ : OPTIONAL IfcForceMeasure;
CompressionFailureX : OPTIONAL IfcForceMeasure;
CompressionFailureY : OPTIONAL IfcForceMeasure;
CompressionFailureZ : OPTIONAL IfcForceMeasure;
END_ENTITY;
*/
