<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcClassificationReference extends IfcExternalReference{

	static public $translationFR = 'Référence de classification';

	static public $params = [
		[
			'name' => 'Location',
			'class' => 'Type\IfcURIReference',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Identification',
			'class' => 'Type\IfcIdentifier',
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
			'name' => 'ReferencedSource',
			'class' => 'Type\IfcClassificationReferenceSelect',
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
			'name' => 'Sort',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcClassificationReference
SUBTYPE OF (IfcExternalReference);
ReferencedSource : OPTIONAL IfcClassificationReferenceSelect;
Description : OPTIONAL IfcText;
Sort : OPTIONAL IfcIdentifier;
INVERSE
ClassificationRefForObjects : SET [0:?] OF IfcRelAssociatesClassification FOR RelatingClassification;
HasReferences : SET [0:?] OF IfcClassificationReference FOR ReferencedSource;
END_ENTITY;
*/
