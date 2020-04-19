<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralLoad extends IFC\Common{

	static public $elementName = 'IFCSTRUCTURALLOAD';

	static public $translationFR = 'Charge structurelle';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcStructuralLoadConfiguration
	IfcStructuralLoadOrResult
*/


/* DEFINITION
ENTITY IfcStructuralLoad
ABSTRACT SUPERTYPE OF (ONEOF
(IfcStructuralLoadConfiguration
,IfcStructuralLoadOrResult));
Name : OPTIONAL IfcLabel;
END_ENTITY;
*/
