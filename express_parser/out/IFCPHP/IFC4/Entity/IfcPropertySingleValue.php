<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPropertySingleValue extends IfcSimpleProperty{

	static public $elementName = 'IFCPROPERTYSINGLEVALUE';

	static public $translationFR = 'Propriété à valeur simple';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Description',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'NominalValue',
			'class' => 'Type\IfcValue',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Unit',
			'class' => 'Type\IfcUnit',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcPropertySingleValue
SUBTYPE OF (IfcSimpleProperty);
NominalValue : OPTIONAL IfcValue;
Unit : OPTIONAL IfcUnit;
END_ENTITY;
*/
