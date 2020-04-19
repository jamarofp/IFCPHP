<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcClosedShell extends IfcConnectedFaceSet{

	static public $elementName = 'IFCCLOSEDSHELL';

	static public $translationFR = 'Enveloppe fermée';

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
ENTITY IfcClosedShell
SUBTYPE OF (IfcConnectedFaceSet);
END_ENTITY;
*/
