<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcClassificationSelect extends IFC\Common{

	static public $elementName = 'IFCCLASSIFICATIONSELECT';

	static public $translationFR = 'Sélection de classification';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcClassificationSelect = SELECT
(IfcClassification
,IfcClassificationReference);
END_TYPE;
*/
