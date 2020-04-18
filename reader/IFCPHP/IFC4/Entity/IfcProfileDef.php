<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcProfileDef extends IFC\Common{

	static public $translationFR = 'Définition de profi';

	static public $params = [
		[
			'name' => 'ProfileType',
			'class' => 'Type\IfcProfileTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ProfileName',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcArbitraryClosedProfileDef
	IfcArbitraryOpenProfileDef
	IfcCompositeProfileDef
	IfcDerivedProfileDef
	IfcParameterizedProfileDef
*/


/* DEFINITION
ENTITY IfcProfileDef
SUPERTYPE OF (ONEOF
(IfcArbitraryClosedProfileDef
,IfcArbitraryOpenProfileDef
,IfcCompositeProfileDef
,IfcDerivedProfileDef
,IfcParameterizedProfileDef));
ProfileType : IfcProfileTypeEnum;
ProfileName : OPTIONAL IfcLabel;
INVERSE
HasExternalReference : SET [0:?] OF IfcExternalReferenceRelationship FOR RelatedResourceObjects;
HasProperties : SET [0:?] OF IfcProfileProperties FOR ProfileDefinition;
END_ENTITY;
*/
