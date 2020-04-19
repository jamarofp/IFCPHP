<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTextStyle extends IfcPresentationStyle{

	static public $elementName = 'IFCTEXTSTYLE';

	static public $translationFR = 'Style de texte';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TextCharacterAppearance',
			'class' => 'Entity\IfcTextStyleForDefinedFont',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TextStyle',
			'class' => 'Entity\IfcTextStyleTextModel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TextFontStyle',
			'class' => 'Type\IfcTextFontSelect',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'ModelOrDraughting',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcTextStyle
SUBTYPE OF (IfcPresentationStyle);
TextCharacterAppearance : OPTIONAL IfcTextStyleForDefinedFont;
TextStyle : OPTIONAL IfcTextStyleTextModel;
TextFontStyle : IfcTextFontSelect;
ModelOrDraughting : OPTIONAL BOOLEAN;
END_ENTITY;
*/
