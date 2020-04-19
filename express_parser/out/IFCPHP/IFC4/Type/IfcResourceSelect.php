<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcResourceSelect extends IFC\Common{

	static public $elementName = 'IFCRESOURCESELECT';

	static public $translationFR = 'Sélection entre ressource et type de ressource';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcResourceSelect = SELECT
(IfcResource
,IfcTypeResource);
END_TYPE;
*/
