<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcRelAssociatesMaterial extends IfcRelAssociates{

	static public $elementName = 'IFCRELASSOCIATESMATERIAL';

	static public $translationFR = 'Association de matériau';

	static public $params = [
		[
			'name' => 'GlobalId',
			'class' => 'Type\IfcGloballyUniqueId',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'OwnerHistory',
			'class' => 'Entity\IfcOwnerHistory',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Description',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'RelatedObjects',
			'class' => 'Type\IfcDefinitionSelect',
			'type' => 'array',
			'optional' => false,
			'min' => 1,
		],
		[
			'name' => 'RelatingMaterial',
			'class' => 'Type\IfcMaterialSelect',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcRelAssociatesMaterial
SUBTYPE OF (IfcRelAssociates);
RelatingMaterial : IfcMaterialSelect;
WHERE
NoVoidElement : SIZEOF(QUERY(temp <* SELF\IfcRelAssociates.RelatedObjects |
('IFC4.IFCFEATUREELEMENTSUBTRACTION' IN TYPEOF(temp)) OR
('IFC4.IFCVIRTUALELEMENT' IN TYPEOF(temp))
)) = 0;
AllowedElements : SIZEOF(QUERY(temp <* SELF\IfcRelAssociates.RelatedObjects | (
SIZEOF(TYPEOF(temp) * [
'IFC4.IFCELEMENT',
'IFC4.IFCELEMENTTYPE',
'IFC4.IFCWINDOWSTYLE',
'IFC4.IFCDOORSTYLE',
'IFC4.IFCSTRUCTURALMEMBER',
'IFC4.IFCPORT']) = 0)
)) = 0;
END_ENTITY;
*/
