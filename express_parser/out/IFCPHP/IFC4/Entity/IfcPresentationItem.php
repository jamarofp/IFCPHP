<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPresentationItem extends IFC\Common{

	static public $elementName = 'IFCPRESENTATIONITEM';

	static public $translationFR = 'Item de présentation';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcColourRgbList
	IfcColourSpecification
	IfcCurveStyleFont
	IfcCurveStyleFontAndScaling
	IfcCurveStyleFontPattern
	IfcIndexedColourMap
	IfcPreDefinedItem
	IfcSurfaceStyleLighting
	IfcSurfaceStyleRefraction
	IfcSurfaceStyleShading
	IfcSurfaceStyleWithTextures
	IfcSurfaceTexture
	IfcTextStyleForDefinedFont
	IfcTextStyleTextModel
	IfcTextureCoordinate
	IfcTextureVertex
	IfcTextureVertexList
*/


/* DEFINITION
ENTITY IfcPresentationItem
ABSTRACT SUPERTYPE OF (ONEOF
(IfcColourRgbList
,IfcColourSpecification
,IfcCurveStyleFont
,IfcCurveStyleFontAndScaling
,IfcCurveStyleFontPattern
,IfcIndexedColourMap
,IfcPreDefinedItem
,IfcSurfaceStyleLighting
,IfcSurfaceStyleRefraction
,IfcSurfaceStyleShading
,IfcSurfaceStyleWithTextures
,IfcSurfaceTexture
,IfcTextStyleForDefinedFont
,IfcTextStyleTextModel
,IfcTextureCoordinate
,IfcTextureVertex
,IfcTextureVertexList));
END_ENTITY;
*/
