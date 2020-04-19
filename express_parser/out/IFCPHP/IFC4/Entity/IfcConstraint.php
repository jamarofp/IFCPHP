<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcConstraint extends IFC\Common{

	static public $elementName = 'IFCCONSTRAINT';

	static public $translationFR = 'Contrainte';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Description',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ConstraintGrade',
			'class' => 'Type\IfcConstraintEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ConstraintSource',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CreatingActor',
			'class' => 'Type\IfcActorSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CreationTime',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'UserDefinedGrade',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcMetric
	IfcObjective
*/


/* DEFINITION
ENTITY IfcConstraint
ABSTRACT SUPERTYPE OF (ONEOF
(IfcMetric
,IfcObjective));
Name : IfcLabel;
Description : OPTIONAL IfcText;
ConstraintGrade : IfcConstraintEnum;
ConstraintSource : OPTIONAL IfcLabel;
CreatingActor : OPTIONAL IfcActorSelect;
CreationTime : OPTIONAL IfcDateTime;
UserDefinedGrade : OPTIONAL IfcLabel;
INVERSE
HasExternalReferences : SET [0:?] OF IfcExternalReferenceRelationship FOR RelatedResourceObjects;
PropertiesForConstraint : SET [0:?] OF IfcResourceConstraintRelationship FOR RelatingConstraint;
WHERE
WR11 : (ConstraintGrade <> IfcConstraintEnum.USERDEFINED) OR
((ConstraintGrade = IfcConstraintEnum.USERDEFINED) AND EXISTS(SELF\IfcConstraint.UserDefinedGrade));
END_ENTITY;
*/
