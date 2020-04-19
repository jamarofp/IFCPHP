<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRepresentationContext extends IFC\Common{

	static public $elementName = 'IFCREPRESENTATIONCONTEXT';

	static public $translationFR = 'Contexte de représentation';

	static public $params = [
		[
			'name' => 'ContextIdentifier',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ContextType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcGeometricRepresentationContext
*/


/* DEFINITION
ENTITY IfcRepresentationContext
ABSTRACT SUPERTYPE OF (ONEOF
(IfcGeometricRepresentationContext));
ContextIdentifier : OPTIONAL IfcLabel;
ContextType : OPTIONAL IfcLabel;
INVERSE
RepresentationsInContext : SET [0:?] OF IfcRepresentation FOR ContextOfItems;
END_ENTITY;
*/
