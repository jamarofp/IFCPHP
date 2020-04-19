<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcExternalInformation extends IFC\Common{

	static public $elementName = 'IFCEXTERNALINFORMATION';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcClassification
	IfcDocumentInformation
	IfcLibraryInformation
*/


/* DEFINITION
ENTITY IfcExternalInformation
ABSTRACT SUPERTYPE OF (ONEOF
(IfcClassification
,IfcDocumentInformation
,IfcLibraryInformation));
END_ENTITY;
*/
