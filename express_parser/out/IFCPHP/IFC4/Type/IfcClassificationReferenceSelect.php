<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcClassificationReferenceSelect extends IFC\Common{

	static public $elementName = 'IFCCLASSIFICATIONREFERENCESELECT';

	static public $translationFR = 'Sélection de référence de classification';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcClassificationReferenceSelect = SELECT
(IfcClassification
,IfcClassificationReference);
END_TYPE;
*/
