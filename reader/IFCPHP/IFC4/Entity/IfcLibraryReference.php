<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcLibraryReference extends IfcExternalReference{

	static public $translationFR = 'Référence de bibliothèque';

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
			'name' => 'Language',
			'class' => 'Type\IfcLanguageId',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ReferencedLibrary',
			'class' => 'Entity\IfcLibraryInformation',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcLibraryReference
SUBTYPE OF (IfcExternalReference);
Description : OPTIONAL IfcText;
Language : OPTIONAL IfcLanguageId;
ReferencedLibrary : OPTIONAL IfcLibraryInformation;
INVERSE
LibraryRefForObjects : SET [0:?] OF IfcRelAssociatesLibrary FOR RelatingLibrary;
END_ENTITY;
*/
