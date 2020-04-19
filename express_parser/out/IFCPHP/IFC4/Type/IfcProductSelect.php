<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcProductSelect extends IFC\Common{

	static public $elementName = 'IFCPRODUCTSELECT';

	static public $translationFR = 'Sélection entre produit et type de produit';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcProductSelect = SELECT
(IfcProduct
,IfcTypeProduct);
END_TYPE;
*/
