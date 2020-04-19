<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcVertexLoop extends IfcLoop{

	static public $elementName = 'IFCVERTEXLOOP';

	static public $translationFR = 'Boucle de points';

	static public $params = [
		[
			'name' => 'LoopVertex',
			'class' => 'Entity\IfcVertex',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcVertexLoop
SUBTYPE OF (IfcLoop);
LoopVertex : IfcVertex;
END_ENTITY;
*/
