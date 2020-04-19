<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPreDefinedProperties extends IfcPropertyAbstraction{

	static public $elementName = 'IFCPREDEFINEDPROPERTIES';

	static public $translationFR = 'Propriétés prédéfinies';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcReinforcementBarProperties
	IfcSectionProperties
	IfcSectionReinforcementProperties
*/


/* DEFINITION
ENTITY IfcPreDefinedProperties
ABSTRACT SUPERTYPE OF (ONEOF
(IfcReinforcementBarProperties
,IfcSectionProperties
,IfcSectionReinforcementProperties))
SUBTYPE OF (IfcPropertyAbstraction);
END_ENTITY;
*/
