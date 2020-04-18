<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCompoundPlaneAngleMeasure extends IFC\Common{

	static public $translationFR = 'Mesure composée d\'angle plan';

	static public $params = [[

	]];
}
/* DEFINITION
TYPE IfcCompoundPlaneAngleMeasure = LIST [3:4] OF INTEGER;
WHERE
MinutesInRange : ABS(SELF[2]) < 60;
SecondsInRange : ABS(SELF[3]) < 60;
MicrosecondsInRange : (SIZEOF(SELF) = 3) OR (ABS(SELF[4]) < 1000000);
ConsistentSign : ((SELF[1] >= 0) AND (SELF[2] >= 0) AND (SELF[3] >= 0) AND ((SIZEOF(SELF) = 3) OR (SELF[4] >= 0)))
OR
((SELF[1] <= 0) AND (SELF[2] <= 0) AND (SELF[3] <= 0) AND ((SIZEOF(SELF) = 3) OR (SELF[4] <= 0)));
END_TYPE;
*/
