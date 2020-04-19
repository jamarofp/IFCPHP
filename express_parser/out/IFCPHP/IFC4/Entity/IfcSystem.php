<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSystem extends IfcGroup{

	static public $elementName = 'IFCSYSTEM';

	static public $translationFR = 'Système';

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
	];
}
/* SUPERTYPE
	IfcBuildingSystem
	IfcDistributionSystem
	IfcStructuralAnalysisModel
	IfcZone
*/


/* DEFINITION
ENTITY IfcSystem
SUPERTYPE OF (ONEOF
(IfcBuildingSystem
,IfcDistributionSystem
,IfcStructuralAnalysisModel
,IfcZone))
SUBTYPE OF (IfcGroup);
INVERSE
ServicesBuildings : SET [0:1] OF IfcRelServicesBuildings FOR RelatingSystem;
END_ENTITY;
*/
