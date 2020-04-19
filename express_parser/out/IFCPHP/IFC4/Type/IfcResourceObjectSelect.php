<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcResourceObjectSelect extends IFC\Common{

	static public $elementName = 'IFCRESOURCEOBJECTSELECT';

	static public $translationFR = 'Sélection d\'entité ressource';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcResourceObjectSelect = SELECT
(IfcActorRole
,IfcAppliedValue
,IfcApproval
,IfcConstraint
,IfcContextDependentUnit
,IfcConversionBasedUnit
,IfcExternalInformation
,IfcExternalReference
,IfcMaterialDefinition
,IfcOrganization
,IfcPerson
,IfcPersonAndOrganization
,IfcPhysicalQuantity
,IfcProfileDef
,IfcPropertyAbstraction
,IfcTimeSeries);
END_TYPE;
*/
