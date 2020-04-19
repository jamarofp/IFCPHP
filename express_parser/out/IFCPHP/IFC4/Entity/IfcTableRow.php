<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTableRow extends IFC\Common{

	static public $elementName = 'IFCTABLEROW';

	static public $translationFR = 'Ligne de table';

	static public $params = [
		[
			'name' => 'RowCells',
			'class' => 'Type\IfcValue',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'IsHeading',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcTableRow;
RowCells : OPTIONAL LIST [1:?] OF IfcValue;
IsHeading : OPTIONAL BOOLEAN;
INVERSE
OfTable : IfcTable FOR Rows;
END_ENTITY;
*/
