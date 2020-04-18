<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcSurfaceStyleElementSelect extends IFC\Common{

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcSurfaceStyleElementSelect = SELECT
(IfcExternallyDefinedSurfaceStyle
,IfcSurfaceStyleLighting
,IfcSurfaceStyleRefraction
,IfcSurfaceStyleShading
,IfcSurfaceStyleWithTextures);
END_TYPE;
*/
