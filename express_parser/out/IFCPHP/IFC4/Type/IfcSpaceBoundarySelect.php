<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSpaceBoundarySelect extends IFC\Common{

	static public $elementName = 'IFCSPACEBOUNDARYSELECT';

	static public $translationFR = 'Sélection de type de limite d\'espace';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcSpaceBoundarySelect = SELECT
(IfcExternalSpatialElement
,IfcSpace);
END_TYPE;
*/
