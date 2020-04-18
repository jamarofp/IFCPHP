<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSimplePropertyTemplateTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de modèles de propriétés simples';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'P_SINGLEVALUE',
			'P_ENUMERATEDVALUE',
			'P_BOUNDEDVALUE',
			'P_LISTVALUE',
			'P_TABLEVALUE',
			'P_REFERENCEVALUE',
			'Q_LENGTH',
			'Q_AREA',
			'Q_VOLUME',
			'Q_COUNT',
			'Q_WEIGHT',
			'Q_TIME',
		],
	]];
}
/* DEFINITION
TYPE IfcSimplePropertyTemplateTypeEnum = ENUMERATION OF
(P_SINGLEVALUE
,P_ENUMERATEDVALUE
,P_BOUNDEDVALUE
,P_LISTVALUE
,P_TABLEVALUE
,P_REFERENCEVALUE
,Q_LENGTH
,Q_AREA
,Q_VOLUME
,Q_COUNT
,Q_WEIGHT
,Q_TIME);
END_TYPE;
*/
