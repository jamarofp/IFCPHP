<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcProperty extends IfcPropertyAbstraction{

	static public $elementName = 'IFCPROPERTY';

	static public $translationFR = 'Propriété';

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
	IfcComplexProperty
	IfcSimpleProperty
*/


/* DEFINITION
ENTITY IfcProperty
ABSTRACT SUPERTYPE OF (ONEOF
(IfcComplexProperty
,IfcSimpleProperty))
SUBTYPE OF (IfcPropertyAbstraction);
Name : IfcIdentifier;
Description : OPTIONAL IfcText;
INVERSE
PartOfPset : SET [0:?] OF IfcPropertySet FOR HasProperties;
PropertyForDependance : SET [0:?] OF IfcPropertyDependencyRelationship FOR DependingProperty;
PropertyDependsOn : SET [0:?] OF IfcPropertyDependencyRelationship FOR DependantProperty;
PartOfComplex : SET [0:?] OF IfcComplexProperty FOR HasProperties;
END_ENTITY;
*/
