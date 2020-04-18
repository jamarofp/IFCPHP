<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTextureVertexList extends IfcPresentationItem{

	static public $translationFR = 'Liste des sommets de texture';

	static public $params = [
		[
			'name' => 'TexCoordsList',
			'class' => 'Type\IfcParameterValue',
			'type' => 'array',
			'optional' => false,
			'min' => 2,
			'max' => 2,
		],
	];
}
/* DEFINITION
ENTITY IfcTextureVertexList
SUBTYPE OF (IfcPresentationItem);
TexCoordsList : LIST [1:?] OF LIST [2:2] OF IfcParameterValue;
END_ENTITY;
*/
