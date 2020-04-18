<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSimpleProperty extends IfcProperty{

	static public $translationFR = 'Propriété simple';

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
	];
}
/* SUPERTYPE
	IfcPropertyBoundedValue
	IfcPropertyEnumeratedValue
	IfcPropertyListValue
	IfcPropertyReferenceValue
	IfcPropertySingleValue
	IfcPropertyTableValue
*/


/* DEFINITION
ENTITY IfcSimpleProperty
ABSTRACT SUPERTYPE OF (ONEOF
(IfcPropertyBoundedValue
,IfcPropertyEnumeratedValue
,IfcPropertyListValue
,IfcPropertyReferenceValue
,IfcPropertySingleValue
,IfcPropertyTableValue))
SUBTYPE OF (IfcProperty);
END_ENTITY;
*/
