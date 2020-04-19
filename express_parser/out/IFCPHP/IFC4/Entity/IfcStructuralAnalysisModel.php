<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralAnalysisModel extends IfcSystem{

	static public $elementName = 'IFCSTRUCTURALANALYSISMODEL';

	static public $translationFR = 'Modèle d\'analyse structurelle';

	static public $params = [
		[
			'name' => 'GlobalId',
			'class' => 'Type\IfcGloballyUniqueId',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'OwnerHistory',
			'class' => 'Entity\IfcOwnerHistory',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Description',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ObjectType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PredefinedType',
			'class' => 'Type\IfcAnalysisModelTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'OrientationOf2DPlane',
			'class' => 'Entity\IfcAxis2Placement3D',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LoadedBy',
			'class' => 'Entity\IfcStructuralLoadGroup',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'HasResults',
			'class' => 'Entity\IfcStructuralResultGroup',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'SharedPlacement',
			'class' => 'Entity\IfcObjectPlacement',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcStructuralAnalysisModel
SUBTYPE OF (IfcSystem);
PredefinedType : IfcAnalysisModelTypeEnum;
OrientationOf2DPlane : OPTIONAL IfcAxis2Placement3D;
LoadedBy : OPTIONAL SET [1:?] OF IfcStructuralLoadGroup;
HasResults : OPTIONAL SET [1:?] OF IfcStructuralResultGroup;
SharedPlacement : OPTIONAL IfcObjectPlacement;
WHERE
HasObjectType : (PredefinedType <> IfcAnalysisModelTypeEnum.USERDEFINED) OR EXISTS(SELF\IfcObject.ObjectType);
END_ENTITY;
*/
