<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTableColumn extends IFC\Common{

	static public $elementName = 'IFCTABLECOLUMN';

	static public $translationFR = 'Colonne de table';

	static public $params = [
		[
			'name' => 'Identifier',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Description',
			'class' => 'Type\IfcText',
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
			'name' => 'ReferencePath',
			'class' => 'Entity\IfcReference',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcTableColumn;
Identifier : OPTIONAL IfcIdentifier;
Name : OPTIONAL IfcLabel;
Description : OPTIONAL IfcText;
Unit : OPTIONAL IfcUnit;
ReferencePath : OPTIONAL IfcReference;
END_ENTITY;
*/
