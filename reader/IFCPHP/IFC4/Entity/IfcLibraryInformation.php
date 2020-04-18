<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcLibraryInformation extends IfcExternalInformation{

	static public $translationFR = 'Information de bibliothèque';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Version',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Publisher',
			'class' => 'Type\IfcActorSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'VersionDate',
			'class' => 'Type\IfcDateTime',
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
			'name' => 'Description',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcLibraryInformation
SUBTYPE OF (IfcExternalInformation);
Name : IfcLabel;
Version : OPTIONAL IfcLabel;
Publisher : OPTIONAL IfcActorSelect;
VersionDate : OPTIONAL IfcDateTime;
Location : OPTIONAL IfcURIReference;
Description : OPTIONAL IfcText;
INVERSE
LibraryInfoForObjects : SET [0:?] OF IfcRelAssociatesLibrary FOR RelatingLibrary;
HasLibraryReferences : SET [0:?] OF IfcLibraryReference FOR ReferencedLibrary;
END_ENTITY;
*/
