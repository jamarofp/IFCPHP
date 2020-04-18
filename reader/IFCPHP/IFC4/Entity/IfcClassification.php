<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcClassification extends IfcExternalInformation{

	static public $translationFR = 'Classification';

	static public $params = [
		[
			'name' => 'Source',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Edition',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'EditionDate',
			'class' => 'Type\IfcDate',
			'type' => 'object',
			'optional' => true,
		],
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
		[
			'name' => 'Location',
			'class' => 'Type\IfcURIReference',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ReferenceTokens',
			'class' => 'Type\IfcIdentifier',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcClassification
SUBTYPE OF (IfcExternalInformation);
Source : OPTIONAL IfcLabel;
Edition : OPTIONAL IfcLabel;
EditionDate : OPTIONAL IfcDate;
Name : IfcLabel;
Description : OPTIONAL IfcText;
Location : OPTIONAL IfcURIReference;
ReferenceTokens : OPTIONAL LIST [1:?] OF IfcIdentifier;
INVERSE
ClassificationForObjects : SET [0:?] OF IfcRelAssociatesClassification FOR RelatingClassification;
HasReferences : SET [0:?] OF IfcClassificationReference FOR ReferencedSource;
END_ENTITY;
*/
