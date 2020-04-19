<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcConnectedFaceSet extends IfcTopologicalRepresentationItem{

	static public $elementName = 'IFCCONNECTEDFACESET';

	static public $translationFR = 'Ensemble de faces connectées';

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
/* SUPERTYPE
	IfcClosedShell
	IfcOpenShell
*/


/* DEFINITION
ENTITY IfcConnectedFaceSet
SUPERTYPE OF (ONEOF
(IfcClosedShell
,IfcOpenShell))
SUBTYPE OF (IfcTopologicalRepresentationItem);
CfsFaces : SET [1:?] OF IfcFace;
END_ENTITY;
*/
