<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSurfaceOrFaceSurface extends IFC\Common{

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcSurfaceOrFaceSurface = SELECT
(IfcFaceBasedSurfaceModel
,IfcFaceSurface
,IfcSurface);
END_TYPE;
*/
