<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcCompositeProfileDef extends IfcProfileDef{

	static public $translationFR = 'Définition de profil composite';

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
		[
			'name' => 'Profiles',
			'class' => 'Entity\IfcProfileDef',
			'type' => 'array',
			'optional' => false,
			'min' => 2,
		],
		[
			'name' => 'Label',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcCompositeProfileDef
SUBTYPE OF (IfcProfileDef);
Profiles : SET [2:?] OF IfcProfileDef;
Label : OPTIONAL IfcLabel;
WHERE
InvariantProfileType : SIZEOF(QUERY(temp <* Profiles | temp.ProfileType <> Profiles[1].ProfileType)) = 0;
NoRecursion : SIZEOF(QUERY(temp <* Profiles | 'IFC4.IFCCOMPOSITEPROFILEDEF' IN TYPEOF(temp))) = 0;
END_ENTITY;
*/
