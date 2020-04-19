<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcModulusOfElasticityMeasure extends IFC\Common{

	static public $elementName = 'IFCMODULUSOFELASTICITYMEASURE';

	static public $translationFR = 'Mesure du module d\'élasticité';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcModulusOfElasticityMeasure = REAL;
END_TYPE;
*/
