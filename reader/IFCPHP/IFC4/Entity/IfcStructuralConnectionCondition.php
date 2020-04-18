<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralConnectionCondition extends IFC\Common{

	static public $translationFR = 'Condition de connection structurelle';

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
	IfcFailureConnectionCondition
	IfcSlippageConnectionCondition
*/


/* DEFINITION
ENTITY IfcStructuralConnectionCondition
ABSTRACT SUPERTYPE OF (ONEOF
(IfcFailureConnectionCondition
,IfcSlippageConnectionCondition));
Name : OPTIONAL IfcLabel;
END_ENTITY;
*/
