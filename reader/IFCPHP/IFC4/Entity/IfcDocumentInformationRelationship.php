<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcDocumentInformationRelationship extends IfcResourceLevelRelationship{

	static public $translationFR = 'Relation entre un document et des documents associés';

	static public $params = [
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
			'name' => 'RelatingDocument',
			'class' => 'Entity\IfcDocumentInformation',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'RelatedDocuments',
			'class' => 'Entity\IfcDocumentInformation',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'RelationshipType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcDocumentInformationRelationship
SUBTYPE OF (IfcResourceLevelRelationship);
RelatingDocument : IfcDocumentInformation;
RelatedDocuments : SET [1:?] OF IfcDocumentInformation;
RelationshipType : OPTIONAL IfcLabel;
END_ENTITY;
*/
