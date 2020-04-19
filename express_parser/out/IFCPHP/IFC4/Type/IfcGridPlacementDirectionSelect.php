<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcGridPlacementDirectionSelect extends IFC\Common{

	static public $elementName = 'IFCGRIDPLACEMENTDIRECTIONSELECT';

	static public $translationFR = 'Sélection de la direction du placement de la grille';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcGridPlacementDirectionSelect = SELECT
(IfcDirection
,IfcVirtualGridIntersection);
END_TYPE;
*/
