<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcComplexNumber extends IFC\Common{

	static public $elementName = 'IFCCOMPLEXNUMBER';

	static public $translationFR = 'Nombre complexe';

	static public $params = [[

	]];
}
/* DEFINITION
TYPE IfcComplexNumber = ARRAY [1:2] OF REAL;
END_TYPE;
*/
