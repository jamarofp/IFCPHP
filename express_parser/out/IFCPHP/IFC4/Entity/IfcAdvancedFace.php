<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcAdvancedFace extends IfcFaceSurface{

	static public $elementName = 'IFCADVANCEDFACE';

	static public $translationFR = 'Face avancée';

	static public $params = [
		[
			'name' => 'Bounds',
			'class' => 'Entity\IfcFaceBound',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'FaceSurface',
			'class' => 'Entity\IfcSurface',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'SameSense',
			'class' => 'Base\Boolean',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcAdvancedFace
SUBTYPE OF (IfcFaceSurface);
WHERE
ApplicableSurface : SIZEOF (
['IFC4.IFCELEMENTARYSURFACE',
'IFC4.IFCSWEPTSURFACE',
'IFC4.IFCBSPLINESURFACE'] *
TYPEOF(SELF\IfcFaceSurface.FaceSurface)) = 1;
RequiresEdgeCurve : SIZEOF(QUERY (ElpFbnds <*
QUERY (Bnds <* SELF\IfcFace.Bounds |
'IFC4.IFCEDGELOOP' IN TYPEOF(Bnds.Bound)) |
NOT (SIZEOF (QUERY (Oe <* ElpFbnds.Bound\IfcEdgeLoop.EdgeList |
NOT('IFC4.IFCEDGECURVE' IN
TYPEOF(Oe\IfcOrientedEdge.EdgeElement)
))) = 0
))) = 0;
ApplicableEdgeCurves : SIZEOF(QUERY (ElpFbnds <*
QUERY (Bnds <* SELF\IfcFace.Bounds |
'IFC4.IFCEDGELOOP' IN TYPEOF(Bnds.Bound)) |
NOT (SIZEOF (QUERY (Oe <* ElpFbnds.Bound\IfcEdgeLoop.EdgeList |
NOT (SIZEOF (['IFC4.IFCLINE',
'IFC4.IFCCONIC',
'IFC4.IFCPOLYLINE',
'IFC4.IFCBSPLINECURVE'] *
TYPEOF(Oe\IfcOrientedEdge.EdgeElement\IfcEdgeCurve.EdgeGeometry)) = 1 )
)) = 0
))) = 0;
END_ENTITY;
*/
