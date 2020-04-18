<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcLaborResourceTypeEnum extends IFC\Common{

	static public $translationFR = 'Enumération des types de ressource en main d\'œuvre';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ADMINISTRATION',
			'CARPENTRY',
			'CLEANING',
			'CONCRETE',
			'DRYWALL',
			'ELECTRIC',
			'FINISHING',
			'FLOORING',
			'GENERAL',
			'HVAC',
			'LANDSCAPING',
			'MASONRY',
			'PAINTING',
			'PAVING',
			'PLUMBING',
			'ROOFING',
			'SITEGRADING',
			'STEELWORK',
			'SURVEYING',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcLaborResourceTypeEnum = ENUMERATION OF
(ADMINISTRATION
,CARPENTRY
,CLEANING
,CONCRETE
,DRYWALL
,ELECTRIC
,FINISHING
,FLOORING
,GENERAL
,HVAC
,LANDSCAPING
,MASONRY
,PAINTING
,PAVING
,PLUMBING
,ROOFING
,SITEGRADING
,STEELWORK
,SURVEYING
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
