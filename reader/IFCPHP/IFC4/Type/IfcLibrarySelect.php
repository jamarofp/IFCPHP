<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLibrarySelect extends IFC\Common{

	static public $translationFR = 'Sélection de bibliothèque';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcLibrarySelect = SELECT
(IfcLibraryInformation
,IfcLibraryReference);
END_TYPE;
*/
