<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcFlowTreatmentDevice extends IfcDistributionFlowElement{

	static public $elementName = 'IFCFLOWTREATMENTDEVICE';

	static public $translationFR = 'Appareil de traitement de fluide';

	static public $params = [
		[
			'name' => 'GlobalId',
			'class' => 'Type\IfcGloballyUniqueId',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'OwnerHistory',
			'class' => 'Entity\IfcOwnerHistory',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Description',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ObjectType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ObjectPlacement',
			'class' => 'Entity\IfcObjectPlacement',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Representation',
			'class' => 'Entity\IfcProductRepresentation',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Tag',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcDuctSilencer
	IfcFilter
	IfcInterceptor
*/


/* DEFINITION
ENTITY IfcFlowTreatmentDevice
SUPERTYPE OF (ONEOF
(IfcDuctSilencer
,IfcFilter
,IfcInterceptor))
SUBTYPE OF (IfcDistributionFlowElement);
END_ENTITY;
*/
