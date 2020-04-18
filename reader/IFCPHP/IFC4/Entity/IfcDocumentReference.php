<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcDocumentReference extends IfcExternalReference{

	static public $translationFR = 'Référence à un document';

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
			'name' => 'Description',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ReferencedDocument',
			'class' => 'Entity\IfcDocumentInformation',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcDocumentReference
SUBTYPE OF (IfcExternalReference);
Description : OPTIONAL IfcText;
ReferencedDocument : OPTIONAL IfcDocumentInformation;
INVERSE
DocumentRefForObjects : SET [0:?] OF IfcRelAssociatesDocument FOR RelatingDocument;
WHERE
WR1 : EXISTS(Name) XOR EXISTS(ReferencedDocument);
END_ENTITY;
*/
