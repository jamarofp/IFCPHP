<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcProductRepresentationSelect extends IFC\Common{

	static public $elementName = 'IFCPRODUCTREPRESENTATIONSELECT';

	static public $translationFR = 'Sélection de la représentation du produit';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcProductRepresentationSelect = SELECT
(IfcProductDefinitionShape
,IfcRepresentationMap);
END_TYPE;
*/
