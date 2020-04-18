<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcObjectReferenceSelect extends IFC\Common{

	static public $translationFR = 'Sélection de référence d\'entité de type ressource';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcObjectReferenceSelect = SELECT
(IfcAddress
,IfcAppliedValue
,IfcExternalReference
,IfcMaterialDefinition
,IfcOrganization
,IfcPerson
,IfcPersonAndOrganization
,IfcTable
,IfcTimeSeries);
END_TYPE;
*/
