<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTextStyleFontModel extends IfcPreDefinedTextFont{

	static public $elementName = 'IFCTEXTSTYLEFONTMODEL';

	static public $translationFR = 'Modèle de police de style de texte';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'FontFamily',
			'class' => 'Type\IfcTextFontName',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'FontStyle',
			'class' => 'Type\IfcFontStyle',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'FontVariant',
			'class' => 'Type\IfcFontVariant',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'FontWeight',
			'class' => 'Type\IfcFontWeight',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'FontSize',
			'class' => 'Type\IfcSizeSelect',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcTextStyleFontModel
SUBTYPE OF (IfcPreDefinedTextFont);
FontFamily : LIST [1:?] OF IfcTextFontName;
FontStyle : OPTIONAL IfcFontStyle;
FontVariant : OPTIONAL IfcFontVariant;
FontWeight : OPTIONAL IfcFontWeight;
FontSize : IfcSizeSelect;
WHERE
MeasureOfFontSize : ('IFC4.IFCLENGTHMEASURE' IN TYPEOF(SELF.FontSize)) AND
(SELF.FontSize > 0.);
END_ENTITY;
*/
