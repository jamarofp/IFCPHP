<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRegularTimeSeries extends IfcTimeSeries{

	static public $translationFR = 'Séries temporelles régulières';

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
			'name' => 'TimeStep',
			'class' => 'Type\IfcTimeMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Values',
			'class' => 'Entity\IfcTimeSeriesValue',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcRegularTimeSeries
SUBTYPE OF (IfcTimeSeries);
TimeStep : IfcTimeMeasure;
Values : LIST [1:?] OF IfcTimeSeriesValue;
END_ENTITY;
*/
