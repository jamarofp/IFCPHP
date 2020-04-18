<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTextStyleTextModel extends IfcPresentationItem{

	static public $translationFR = 'Modèle de style de texte';

	static public $params = [
		[
			'name' => 'TextIndent',
			'class' => 'Type\IfcSizeSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TextAlign',
			'class' => 'Type\IfcTextAlignment',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TextDecoration',
			'class' => 'Type\IfcTextDecoration',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LetterSpacing',
			'class' => 'Type\IfcSizeSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'WordSpacing',
			'class' => 'Type\IfcSizeSelect',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'TextTransform',
			'class' => 'Type\IfcTextTransformation',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LineHeight',
			'class' => 'Type\IfcSizeSelect',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcTextStyleTextModel
SUBTYPE OF (IfcPresentationItem);
TextIndent : OPTIONAL IfcSizeSelect;
TextAlign : OPTIONAL IfcTextAlignment;
TextDecoration : OPTIONAL IfcTextDecoration;
LetterSpacing : OPTIONAL IfcSizeSelect;
WordSpacing : OPTIONAL IfcSizeSelect;
TextTransform : OPTIONAL IfcTextTransformation;
LineHeight : OPTIONAL IfcSizeSelect;
END_ENTITY;
*/
