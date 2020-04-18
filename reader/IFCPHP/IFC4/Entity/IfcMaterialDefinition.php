<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcMaterialDefinition extends IFC\Common{

	static public $translationFR = 'Définition de matériau';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcMaterial
	IfcMaterialConstituent
	IfcMaterialConstituentSet
	IfcMaterialLayer
	IfcMaterialLayerSet
	IfcMaterialProfile
	IfcMaterialProfileSet
*/


/* DEFINITION
ENTITY IfcMaterialDefinition
ABSTRACT SUPERTYPE OF (ONEOF
(IfcMaterial
,IfcMaterialConstituent
,IfcMaterialConstituentSet
,IfcMaterialLayer
,IfcMaterialLayerSet
,IfcMaterialProfile
,IfcMaterialProfileSet));
INVERSE
AssociatedTo : SET [0:?] OF IfcRelAssociatesMaterial FOR RelatingMaterial;
HasExternalReferences : SET [0:?] OF IfcExternalReferenceRelationship FOR RelatedResourceObjects;
HasProperties : SET [0:?] OF IfcMaterialProperties FOR Material;
END_ENTITY;
*/
