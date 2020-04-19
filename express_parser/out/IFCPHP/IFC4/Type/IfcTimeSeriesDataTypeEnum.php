<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcTimeSeriesDataTypeEnum extends IFC\Common{

	static public $elementName = 'IFCTIMESERIESDATATYPEENUM';

	static public $translationFR = 'Enumération des types de données de séries temporelles';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'CONTINUOUS',
			'DISCRETE',
			'DISCRETEBINARY',
			'PIECEWISEBINARY',
			'PIECEWISECONSTANT',
			'PIECEWISECONTINUOUS',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcTimeSeriesDataTypeEnum = ENUMERATION OF
(CONTINUOUS
,DISCRETE
,DISCRETEBINARY
,PIECEWISEBINARY
,PIECEWISECONSTANT
,PIECEWISECONTINUOUS
,NOTDEFINED);
END_TYPE;
*/
