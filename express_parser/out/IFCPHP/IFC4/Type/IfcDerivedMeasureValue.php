<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDerivedMeasureValue extends IFC\Common{

	static public $elementName = 'IFCDERIVEDMEASUREVALUE';

	static public $translationFR = 'Sélection de mesure dérivée';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcDerivedMeasureValue = SELECT
(IfcAbsorbedDoseMeasure
,IfcAccelerationMeasure
,IfcAngularVelocityMeasure
,IfcAreaDensityMeasure
,IfcCompoundPlaneAngleMeasure
,IfcCurvatureMeasure
,IfcDoseEquivalentMeasure
,IfcDynamicViscosityMeasure
,IfcElectricCapacitanceMeasure
,IfcElectricChargeMeasure
,IfcElectricConductanceMeasure
,IfcElectricResistanceMeasure
,IfcElectricVoltageMeasure
,IfcEnergyMeasure
,IfcForceMeasure
,IfcFrequencyMeasure
,IfcHeatFluxDensityMeasure
,IfcHeatingValueMeasure
,IfcIlluminanceMeasure
,IfcInductanceMeasure
,IfcIntegerCountRateMeasure
,IfcIonConcentrationMeasure
,IfcIsothermalMoistureCapacityMeasure
,IfcKinematicViscosityMeasure
,IfcLinearForceMeasure
,IfcLinearMomentMeasure
,IfcLinearStiffnessMeasure
,IfcLinearVelocityMeasure
,IfcLuminousFluxMeasure
,IfcLuminousIntensityDistributionMeasure
,IfcMagneticFluxDensityMeasure
,IfcMagneticFluxMeasure
,IfcMassDensityMeasure
,IfcMassFlowRateMeasure
,IfcMassPerLengthMeasure
,IfcModulusOfElasticityMeasure
,IfcModulusOfLinearSubgradeReactionMeasure
,IfcModulusOfRotationalSubgradeReactionMeasure
,IfcModulusOfSubgradeReactionMeasure
,IfcMoistureDiffusivityMeasure
,IfcMolecularWeightMeasure
,IfcMomentOfInertiaMeasure
,IfcMonetaryMeasure
,IfcPHMeasure
,IfcPlanarForceMeasure
,IfcPowerMeasure
,IfcPressureMeasure
,IfcRadioActivityMeasure
,IfcRotationalFrequencyMeasure
,IfcRotationalMassMeasure
,IfcRotationalStiffnessMeasure
,IfcSectionModulusMeasure
,IfcSectionalAreaIntegralMeasure
,IfcShearModulusMeasure
,IfcSoundPowerLevelMeasure
,IfcSoundPowerMeasure
,IfcSoundPressureLevelMeasure
,IfcSoundPressureMeasure
,IfcSpecificHeatCapacityMeasure
,IfcTemperatureGradientMeasure
,IfcTemperatureRateOfChangeMeasure
,IfcThermalAdmittanceMeasure
,IfcThermalConductivityMeasure
,IfcThermalExpansionCoefficientMeasure
,IfcThermalResistanceMeasure
,IfcThermalTransmittanceMeasure
,IfcTorqueMeasure
,IfcVaporPermeabilityMeasure
,IfcVolumetricFlowRateMeasure
,IfcWarpingConstantMeasure
,IfcWarpingMomentMeasure);
END_TYPE;
*/
