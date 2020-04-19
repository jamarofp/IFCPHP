<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcConnectionGeometry extends IFC\Common{

	static public $elementName = 'IFCCONNECTIONGEOMETRY';

	static public $translationFR = 'Connexion géométrique';

	static public $params = [
	];
}
/* SUPERTYPE
	IfcConnectionCurveGeometry
	IfcConnectionPointGeometry
	IfcConnectionSurfaceGeometry
	IfcConnectionVolumeGeometry
*/


/* DEFINITION
ENTITY IfcConnectionGeometry
ABSTRACT SUPERTYPE OF (ONEOF
(IfcConnectionCurveGeometry
,IfcConnectionPointGeometry
,IfcConnectionSurfaceGeometry
,IfcConnectionVolumeGeometry));
END_ENTITY;
*/
