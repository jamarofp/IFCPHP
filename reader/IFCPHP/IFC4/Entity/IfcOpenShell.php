<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcOpenShell extends IfcConnectedFaceSet{

	static public $params = [
		[
			'name' => 'CfsFaces',
			'class' => 'Entity\IfcFace',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcOpenShell
SUBTYPE OF (IfcConnectedFaceSet);
END_ENTITY;
*/
