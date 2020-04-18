<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcQuantityVolume extends IfcPhysicalSimpleQuantity{

	static public $translationFR = 'Quantité de volume';

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
			'name' => 'Unit',
			'class' => 'Entity\IfcNamedUnit',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'VolumeValue',
			'class' => 'Type\IfcVolumeMeasure',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Formula',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcQuantityVolume
SUBTYPE OF (IfcPhysicalSimpleQuantity);
VolumeValue : IfcVolumeMeasure;
Formula : OPTIONAL IfcLabel;
WHERE
WR21 : NOT(EXISTS(SELF\IfcPhysicalSimpleQuantity.Unit)) OR
(SELF\IfcPhysicalSimpleQuantity.Unit.UnitType = IfcUnitEnum.VOLUMEUNIT);
WR22 : VolumeValue >= 0.;
END_ENTITY;
*/
