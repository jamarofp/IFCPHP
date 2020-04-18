<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTimeSeries extends IFC\Common{

	static public $translationFR = 'Séries temporelles';

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
	];
}
/* SUPERTYPE
	IfcIrregularTimeSeries
	IfcRegularTimeSeries
*/


/* DEFINITION
ENTITY IfcTimeSeries
ABSTRACT SUPERTYPE OF (ONEOF
(IfcIrregularTimeSeries
,IfcRegularTimeSeries));
Name : IfcLabel;
Description : OPTIONAL IfcText;
StartTime : IfcDateTime;
EndTime : IfcDateTime;
TimeSeriesDataType : IfcTimeSeriesDataTypeEnum;
DataOrigin : IfcDataOriginEnum;
UserDefinedDataOrigin : OPTIONAL IfcLabel;
Unit : OPTIONAL IfcUnit;
INVERSE
HasExternalReference : SET [1:?] OF IfcExternalReferenceRelationship FOR RelatedResourceObjects;
END_ENTITY;
*/
