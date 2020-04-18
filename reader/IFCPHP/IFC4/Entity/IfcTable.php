<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTable extends IFC\Common{

	static public $translationFR = 'Table';

	static public $params = [
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Rows',
			'class' => 'Entity\IfcTableRow',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'Columns',
			'class' => 'Entity\IfcTableColumn',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcTable;
Name : OPTIONAL IfcLabel;
Rows : OPTIONAL LIST [1:?] OF IfcTableRow;
Columns : OPTIONAL LIST [1:?] OF IfcTableColumn;
DERIVE
NumberOfCellsInRow : INTEGER := HIINDEX(Rows[1].RowCells);
NumberOfHeadings : INTEGER := SIZEOF(QUERY( Temp <* Rows | Temp.IsHeading));
NumberOfDataRows : INTEGER := SIZEOF(QUERY( Temp <* Rows | NOT(Temp.IsHeading)));
WHERE
WR1 : SIZEOF(QUERY( Temp <* Rows | HIINDEX(Temp.RowCells) <> HIINDEX(Rows[1].RowCells))) = 0;
WR2 : { 0 <= NumberOfHeadings <= 1 };
END_ENTITY;
*/
