<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcMeasureValue extends IFC\Common{

	static public $elementName = 'IFCMEASUREVALUE';

	static public $translationFR = 'Valeur de mesure';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcMeasureValue = SELECT
(IfcAmountOfSubstanceMeasure
,IfcAreaMeasure
,IfcComplexNumber
,IfcContextDependentMeasure
,IfcCountMeasure
,IfcDescriptiveMeasure
,IfcElectricCurrentMeasure
,IfcLengthMeasure
,IfcLuminousIntensityMeasure
,IfcMassMeasure
,IfcNonNegativeLengthMeasure
,IfcNormalisedRatioMeasure
,IfcNumericMeasure
,IfcParameterValue
,IfcPlaneAngleMeasure
,IfcPositiveLengthMeasure
,IfcPositivePlaneAngleMeasure
,IfcPositiveRatioMeasure
,IfcRatioMeasure
,IfcSolidAngleMeasure
,IfcThermodynamicTemperatureMeasure
,IfcTimeMeasure
,IfcVolumeMeasure);
END_TYPE;
*/
