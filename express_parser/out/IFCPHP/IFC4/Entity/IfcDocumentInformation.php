<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcDocumentInformation extends IfcExternalInformation{

	static public $elementName = 'IFCDOCUMENTINFORMATION';

	static public $translationFR = 'Métadonnées de document';

	static public $params = [
		[
			'name' => 'Identification',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => false,
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
			'name' => 'Purpose',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'IntendedUse',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Scope',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Revision',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'DocumentOwner',
			'class' => 'Type\IfcActorSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Editors',
			'class' => 'Type\IfcActorSelect',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'CreationTime',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LastRevisionTime',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ElectronicFormat',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ValidFrom',
			'class' => 'Type\IfcDate',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ValidUntil',
			'class' => 'Type\IfcDate',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Confidentiality',
			'class' => 'Type\IfcDocumentConfidentialityEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Status',
			'class' => 'Type\IfcDocumentStatusEnum',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcDocumentInformation
SUBTYPE OF (IfcExternalInformation);
Identification : IfcIdentifier;
Name : IfcLabel;
Description : OPTIONAL IfcText;
Location : OPTIONAL IfcURIReference;
Purpose : OPTIONAL IfcText;
IntendedUse : OPTIONAL IfcText;
Scope : OPTIONAL IfcText;
Revision : OPTIONAL IfcLabel;
DocumentOwner : OPTIONAL IfcActorSelect;
Editors : OPTIONAL SET [1:?] OF IfcActorSelect;
CreationTime : OPTIONAL IfcDateTime;
LastRevisionTime : OPTIONAL IfcDateTime;
ElectronicFormat : OPTIONAL IfcIdentifier;
ValidFrom : OPTIONAL IfcDate;
ValidUntil : OPTIONAL IfcDate;
Confidentiality : OPTIONAL IfcDocumentConfidentialityEnum;
Status : OPTIONAL IfcDocumentStatusEnum;
INVERSE
DocumentInfoForObjects : SET [0:?] OF IfcRelAssociatesDocument FOR RelatingDocument;
HasDocumentReferences : SET [0:?] OF IfcDocumentReference FOR ReferencedDocument;
IsPointedTo : SET [0:?] OF IfcDocumentInformationRelationship FOR RelatedDocuments;
IsPointer : SET [0:1] OF IfcDocumentInformationRelationship FOR RelatingDocument;
END_ENTITY;
*/
