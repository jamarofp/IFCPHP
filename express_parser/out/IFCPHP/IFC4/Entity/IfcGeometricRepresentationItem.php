<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcGeometricRepresentationItem extends IfcRepresentationItem{

	static public $elementName = 'IFCGEOMETRICREPRESENTATIONITEM';

	static public $translationFR = 'Item de représentation géométrique';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcAnnotationFillArea
	IfcBooleanResult
	IfcBoundingBox
	IfcCartesianPointList
	IfcCartesianTransformationOperator
	IfcCompositeCurveSegment
	IfcCsgPrimitive3D
	IfcCurve
	IfcDirection
	IfcFaceBasedSurfaceModel
	IfcFillAreaStyleHatching
	IfcFillAreaStyleTiles
	IfcGeometricSet
	IfcHalfSpaceSolid
	IfcLightSource
	IfcPlacement
	IfcPlanarExtent
	IfcPoint
	IfcSectionedSpine
	IfcShellBasedSurfaceModel
	IfcSolidModel
	IfcSurface
	IfcTessellatedItem
	IfcTextLiteral
	IfcVector
*/


/* DEFINITION
ENTITY IfcGeometricRepresentationItem
ABSTRACT SUPERTYPE OF (ONEOF
(IfcAnnotationFillArea
,IfcBooleanResult
,IfcBoundingBox
,IfcCartesianPointList
,IfcCartesianTransformationOperator
,IfcCompositeCurveSegment
,IfcCsgPrimitive3D
,IfcCurve
,IfcDirection
,IfcFaceBasedSurfaceModel
,IfcFillAreaStyleHatching
,IfcFillAreaStyleTiles
,IfcGeometricSet
,IfcHalfSpaceSolid
,IfcLightSource
,IfcPlacement
,IfcPlanarExtent
,IfcPoint
,IfcSectionedSpine
,IfcShellBasedSurfaceModel
,IfcSolidModel
,IfcSurface
,IfcTessellatedItem
,IfcTextLiteral
,IfcVector))
SUBTYPE OF (IfcRepresentationItem);
END_ENTITY;
*/
