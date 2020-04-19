<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcIrregularTimeSeries extends IfcTimeSeries{

	static public $elementName = 'IFCIRREGULARTIMESERIES';

	static public $translationFR = 'Séries temporelles irrégulières';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Description',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'StartTime',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'EndTime',
			'class' => 'Type\IfcDateTime',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'TimeSeriesDataType',
			'class' => 'Type\IfcTimeSeriesDataTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'DataOrigin',
			'class' => 'Type\IfcDataOriginEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'UserDefinedDataOrigin',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Unit',
			'class' => 'Type\IfcUnit',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Values',
			'class' => 'Entity\IfcIrregularTimeSeriesValue',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcIrregularTimeSeries
SUBTYPE OF (IfcTimeSeries);
Values : LIST [1:?] OF IfcIrregularTimeSeriesValue;
END_ENTITY;
*/
