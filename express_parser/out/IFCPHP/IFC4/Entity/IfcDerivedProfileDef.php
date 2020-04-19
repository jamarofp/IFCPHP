<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcDerivedProfileDef extends IfcProfileDef{

	static public $elementName = 'IFCDERIVEDPROFILEDEF';

	static public $translationFR = 'Définition d\'un profil dérivé';

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
			'name' => 'ParentProfile',
			'class' => 'Entity\IfcProfileDef',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Operator',
			'class' => 'Entity\IfcCartesianTransformationOperator2D',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Label',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcMirroredProfileDef
*/


/* DEFINITION
ENTITY IfcDerivedProfileDef
SUPERTYPE OF (ONEOF
(IfcMirroredProfileDef))
SUBTYPE OF (IfcProfileDef);
ParentProfile : IfcProfileDef;
Operator : IfcCartesianTransformationOperator2D;
Label : OPTIONAL IfcLabel;
WHERE
InvariantProfileType : SELF\IfcProfileDef.ProfileType = ParentProfile.ProfileType;
END_ENTITY;
*/
