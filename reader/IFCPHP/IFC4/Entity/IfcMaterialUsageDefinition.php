<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMaterialUsageDefinition extends IFC\Common{

	static public $translationFR = 'Définition d\'usage de matériau';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcMaterialLayerSetUsage
	IfcMaterialProfileSetUsage
*/


/* DEFINITION
ENTITY IfcMaterialUsageDefinition
ABSTRACT SUPERTYPE OF (ONEOF
(IfcMaterialLayerSetUsage
,IfcMaterialProfileSetUsage));
INVERSE
AssociatedTo : SET [1:?] OF IfcRelAssociatesMaterial FOR RelatingMaterial;
END_ENTITY;
*/
