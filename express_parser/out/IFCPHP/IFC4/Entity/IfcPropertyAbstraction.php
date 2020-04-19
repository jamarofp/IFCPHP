<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPropertyAbstraction extends IFC\Common{

	static public $elementName = 'IFCPROPERTYABSTRACTION';

	static public $translationFR = 'Propriété abstraite';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcExtendedProperties
	IfcPreDefinedProperties
	IfcProperty
	IfcPropertyEnumeration
*/


/* DEFINITION
ENTITY IfcPropertyAbstraction
ABSTRACT SUPERTYPE OF (ONEOF
(IfcExtendedProperties
,IfcPreDefinedProperties
,IfcProperty
,IfcPropertyEnumeration));
INVERSE
HasExternalReferences : SET [0:?] OF IfcExternalReferenceRelationship FOR RelatedResourceObjects;
END_ENTITY;
*/
