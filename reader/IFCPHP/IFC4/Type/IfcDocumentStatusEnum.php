<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDocumentStatusEnum extends IFC\Common{

	static public $translationFR = 'Enumération des statuts de document';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'DRAFT',
			'FINALDRAFT',
			'FINAL',
			'REVISION',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcDocumentStatusEnum = ENUMERATION OF
(DRAFT
,FINALDRAFT
,FINAL
,REVISION
,NOTDEFINED);
END_TYPE;
*/
