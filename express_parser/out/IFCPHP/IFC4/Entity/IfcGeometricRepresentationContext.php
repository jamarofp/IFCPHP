<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcGeometricRepresentationContext extends IfcRepresentationContext{

	static public $elementName = 'IFCGEOMETRICREPRESENTATIONCONTEXT';

	static public $params = [
		[
			'name' => 'ContextIdentifier',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ContextType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CoordinateSpaceDimension',
			'class' => 'Type\IfcDimensionCount',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Precision',
			'class' => 'Base\Real',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'WorldCoordinateSystem',
			'class' => 'Type\IfcAxis2Placement',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'TrueNorth',
			'class' => 'Entity\IfcDirection',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcGeometricRepresentationSubContext
*/


/* DEFINITION
ENTITY IfcGeometricRepresentationContext
SUPERTYPE OF (ONEOF
(IfcGeometricRepresentationSubContext))
SUBTYPE OF (IfcRepresentationContext);
CoordinateSpaceDimension : IfcDimensionCount;
Precision : OPTIONAL REAL;
WorldCoordinateSystem : IfcAxis2Placement;
TrueNorth : OPTIONAL IfcDirection;
INVERSE
HasSubContexts : SET [0:?] OF IfcGeometricRepresentationSubContext FOR ParentContext;
WHERE
WR11 : NOT(EXISTS(TrueNorth)) OR (HIINDEX(TrueNorth.DirectionRatios) = 2);
END_ENTITY;
*/
