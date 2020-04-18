<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralLoadTemperature extends IfcStructuralLoadStatic{

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'DeltaTConstant',
			'class' => 'Type\IfcThermodynamicTemperatureMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'DeltaTY',
			'class' => 'Type\IfcThermodynamicTemperatureMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'DeltaTZ',
			'class' => 'Type\IfcThermodynamicTemperatureMeasure',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcStructuralLoadTemperature
SUBTYPE OF (IfcStructuralLoadStatic);
DeltaTConstant : OPTIONAL IfcThermodynamicTemperatureMeasure;
DeltaTY : OPTIONAL IfcThermodynamicTemperatureMeasure;
DeltaTZ : OPTIONAL IfcThermodynamicTemperatureMeasure;
END_ENTITY;
*/
