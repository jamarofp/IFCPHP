<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcDraughtingPreDefinedColour extends IfcPreDefinedColour{

	static public $elementName = 'IFCDRAUGHTINGPREDEFINEDCOLOUR';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcDraughtingPreDefinedColour
SUBTYPE OF (IfcPreDefinedColour);
WHERE
PreDefinedColourNames : SELF\IfcPreDefinedItem.Name IN ['black','red','green','blue','yellow',
'magenta','cyan','white','by layer'];
END_ENTITY;
*/
