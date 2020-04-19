<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDocumentSelect extends IFC\Common{

	static public $elementName = 'IFCDOCUMENTSELECT';

	static public $translationFR = 'Sélection entre intégration et référencement des informations de document';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcDocumentSelect = SELECT
(IfcDocumentInformation
,IfcDocumentReference);
END_TYPE;
*/
