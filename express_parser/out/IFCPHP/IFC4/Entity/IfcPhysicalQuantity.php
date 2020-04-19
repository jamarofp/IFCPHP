<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPhysicalQuantity extends IFC\Common{

	static public $elementName = 'IFCPHYSICALQUANTITY';

	static public $translationFR = 'Quantité physique';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
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
	IfcPhysicalComplexQuantity
	IfcPhysicalSimpleQuantity
*/


/* DEFINITION
ENTITY IfcPhysicalQuantity
ABSTRACT SUPERTYPE OF (ONEOF
(IfcPhysicalComplexQuantity
,IfcPhysicalSimpleQuantity));
Name : IfcLabel;
Description : OPTIONAL IfcText;
INVERSE
HasExternalReferences : SET [0:?] OF IfcExternalReferenceRelationship FOR RelatedResourceObjects;
PartOfComplex : SET [0:1] OF IfcPhysicalComplexQuantity FOR HasQuantities;
END_ENTITY;
*/
