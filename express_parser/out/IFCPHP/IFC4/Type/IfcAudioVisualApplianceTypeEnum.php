<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcAudioVisualApplianceTypeEnum extends IFC\Common{

	static public $elementName = 'IFCAUDIOVISUALAPPLIANCETYPEENUM';

	static public $translationFR = 'Énumération des types d\'appareil audiovisue';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'AMPLIFIER',
			'CAMERA',
			'DISPLAY',
			'MICROPHONE',
			'PLAYER',
			'PROJECTOR',
			'RECEIVER',
			'SPEAKER',
			'SWITCHER',
			'TELEPHONE',
			'TUNER',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcAudioVisualApplianceTypeEnum = ENUMERATION OF
(AMPLIFIER
,CAMERA
,DISPLAY
,MICROPHONE
,PLAYER
,PROJECTOR
,RECEIVER
,SPEAKER
,SWITCHER
,TELEPHONE
,TUNER
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
