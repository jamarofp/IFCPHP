<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcConnectionVolumeGeometry extends IfcConnectionGeometry{

	static public $params = [
		[
			'name' => 'VolumeOnRelatingElement',
			'class' => 'Type\IfcSolidOrShell',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'VolumeOnRelatedElement',
			'class' => 'Type\IfcSolidOrShell',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcConnectionVolumeGeometry
SUBTYPE OF (IfcConnectionGeometry);
VolumeOnRelatingElement : IfcSolidOrShell;
VolumeOnRelatedElement : OPTIONAL IfcSolidOrShell;
END_ENTITY;
*/
