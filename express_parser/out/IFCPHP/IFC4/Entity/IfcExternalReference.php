<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcExternalReference extends IFC\Common{

	static public $elementName = 'IFCEXTERNALREFERENCE';

	static public $translationFR = 'Référence externe';

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
	];
}
/* SUPERTYPE
	IfcClassificationReference
	IfcDocumentReference
	IfcExternallyDefinedHatchStyle
	IfcExternallyDefinedSurfaceStyle
	IfcExternallyDefinedTextFont
	IfcLibraryReference
*/


/* DEFINITION
ENTITY IfcExternalReference
ABSTRACT SUPERTYPE OF (ONEOF
(IfcClassificationReference
,IfcDocumentReference
,IfcExternallyDefinedHatchStyle
,IfcExternallyDefinedSurfaceStyle
,IfcExternallyDefinedTextFont
,IfcLibraryReference));
Location : OPTIONAL IfcURIReference;
Identification : OPTIONAL IfcIdentifier;
Name : OPTIONAL IfcLabel;
INVERSE
ExternalReferenceForResources : SET [0:?] OF IfcExternalReferenceRelationship FOR RelatingReference;
WHERE
WR1 : EXISTS(Identification) OR EXISTS(Location) OR EXISTS(Name);
END_ENTITY;
*/
