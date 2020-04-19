<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcColour extends IFC\Common{

	static public $elementName = 'IFCCOLOUR';

	static public $translationFR = 'Couleur';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcColour = SELECT
(IfcColourSpecification
,IfcPreDefinedColour);
END_TYPE;
*/
