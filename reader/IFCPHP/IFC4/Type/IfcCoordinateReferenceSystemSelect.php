<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcCoordinateReferenceSystemSelect extends IFC\Common{

	static public $translationFR = 'Sélection du système de coordonnées de référence';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcCoordinateReferenceSystemSelect = SELECT
(IfcCoordinateReferenceSystem
,IfcGeometricRepresentationContext);
END_TYPE;
*/
