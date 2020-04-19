<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcAdvancedBrep extends IfcManifoldSolidBrep{

	static public $elementName = 'IFCADVANCEDBREP';

	static public $translationFR = 'Représentation frontière avancée';

	static public $params = [
		[
			'name' => 'Outer',
			'class' => 'Entity\IfcClosedShell',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcAdvancedBrepWithVoids
*/


/* DEFINITION
ENTITY IfcAdvancedBrep
SUPERTYPE OF (ONEOF
(IfcAdvancedBrepWithVoids))
SUBTYPE OF (IfcManifoldSolidBrep);
WHERE
HasAdvancedFaces : SIZEOF(QUERY(Afs <* SELF\IfcManifoldSolidBrep.Outer.CfsFaces |
(NOT ('IFC4.IFCADVANCEDFACE' IN TYPEOF(Afs)))
)) = 0;
END_ENTITY;
*/
