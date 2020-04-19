<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcPropertySetTemplateTypeEnum extends IFC\Common{

	static public $elementName = 'IFCPROPERTYSETTEMPLATETYPEENUM';

	static public $translationFR = 'Enumération des types de modèles d\'ensemble de propriétés';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'PSET_TYPEDRIVENONLY',
			'PSET_TYPEDRIVENOVERRIDE',
			'PSET_OCCURRENCEDRIVEN',
			'PSET_PERFORMANCEDRIVEN',
			'QTO_TYPEDRIVENONLY',
			'QTO_TYPEDRIVENOVERRIDE',
			'QTO_OCCURRENCEDRIVEN',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcPropertySetTemplateTypeEnum = ENUMERATION OF
(PSET_TYPEDRIVENONLY
,PSET_TYPEDRIVENOVERRIDE
,PSET_OCCURRENCEDRIVEN
,PSET_PERFORMANCEDRIVEN
,QTO_TYPEDRIVENONLY
,QTO_TYPEDRIVENOVERRIDE
,QTO_OCCURRENCEDRIVEN
,NOTDEFINED);
END_TYPE;
*/
