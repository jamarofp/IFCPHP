<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLightDistributionDataSourceSelect extends IFC\Common{

	static public $elementName = 'IFCLIGHTDISTRIBUTIONDATASOURCESELECT';

	static public $translationFR = 'Sélection de la source de données sur la distribution lumineuse';

	static public $params = [[
		'class' => 'Base\Select',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcLightDistributionDataSourceSelect = SELECT
(IfcExternalReference
,IfcLightIntensityDistribution);
END_TYPE;
*/
