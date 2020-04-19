<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralLoadCase extends IfcStructuralLoadGroup{

	static public $elementName = 'IFCSTRUCTURALLOADCASE';

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
			'class' => 'Type\IfcLoadGroupTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ActionType',
			'class' => 'Type\IfcActionTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ActionSource',
			'class' => 'Type\IfcActionSourceTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Coefficient',
			'class' => 'Type\IfcRatioMeasure',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Purpose',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'SelfWeightCoefficients',
			'class' => 'Type\IfcRatioMeasure',
			'type' => 'array',
			'optional' => true,
			'min' => 3,
			'max' => 3,
		],
	];
}
/* DEFINITION
ENTITY IfcStructuralLoadCase
SUBTYPE OF (IfcStructuralLoadGroup);
SelfWeightCoefficients : OPTIONAL LIST [3:3] OF IfcRatioMeasure;
WHERE
IsLoadCasePredefinedType : SELF\IfcStructuralLoadGroup.PredefinedType = IfcLoadGroupTypeEnum.LOAD_CASE;
END_ENTITY;
*/
