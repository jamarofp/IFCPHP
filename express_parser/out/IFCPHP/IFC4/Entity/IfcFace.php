<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcFace extends IfcTopologicalRepresentationItem{

	static public $elementName = 'IFCFACE';

	static public $translationFR = 'Face';

	static public $params = [
		[
			'name' => 'Bounds',
			'class' => 'Entity\IfcFaceBound',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* SUPERTYPE
	IfcFaceSurface
*/


/* DEFINITION
ENTITY IfcFace
SUPERTYPE OF (ONEOF
(IfcFaceSurface))
SUBTYPE OF (IfcTopologicalRepresentationItem);
Bounds : SET [1:?] OF IfcFaceBound;
INVERSE
HasTextureMaps : SET [0:?] OF IfcTextureMap FOR MappedTo;
WHERE
HasOuterBound : SIZEOF(QUERY(temp <* Bounds | 'IFC4.IFCFACEOUTERBOUND' IN TYPEOF(temp))) <= 1;
END_ENTITY;
*/
