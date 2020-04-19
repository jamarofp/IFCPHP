<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcAdvancedBrepWithVoids extends IfcAdvancedBrep{

	static public $elementName = 'IFCADVANCEDBREPWITHVOIDS';

	static public $translationFR = 'Représentation frontière avancée avec trous';

	static public $params = [
		[
			'name' => 'Outer',
			'class' => 'Entity\IfcClosedShell',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Voids',
			'class' => 'Entity\IfcClosedShell',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcAdvancedBrepWithVoids
SUBTYPE OF (IfcAdvancedBrep);
Voids : SET [1:?] OF IfcClosedShell;
WHERE
VoidsHaveAdvancedFaces : SIZEOF (QUERY (Vsh <* Voids |
SIZEOF (QUERY (Afs <* Vsh.CfsFaces |
(NOT ('IFC4.IFCADVANCEDFACE' IN TYPEOF(Afs)))
)) = 0
)) = 0;
END_ENTITY;
*/
