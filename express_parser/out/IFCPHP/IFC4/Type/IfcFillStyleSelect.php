<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcFillStyleSelect extends IFC\Common{

	static public $elementName = 'IFCFILLSTYLESELECT';

	static public $translationFR = 'Sélection de style de remplissage';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcFillStyleSelect = SELECT
(IfcColour
,IfcExternallyDefinedHatchStyle
,IfcFillAreaStyleHatching
,IfcFillAreaStyleTiles);
END_TYPE;
*/
