<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcAddress extends IFC\Common{

	static public $translationFR = 'Adresse';

	static public $params = [
		[
			'name' => 'Purpose',
			'class' => 'Type\IfcAddressTypeEnum',
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
			'name' => 'UserDefinedPurpose',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* SUPERTYPE
	IfcPostalAddress
	IfcTelecomAddress
*/


/* DEFINITION
ENTITY IfcAddress
ABSTRACT SUPERTYPE OF (ONEOF
(IfcPostalAddress
,IfcTelecomAddress));
Purpose : OPTIONAL IfcAddressTypeEnum;
Description : OPTIONAL IfcText;
UserDefinedPurpose : OPTIONAL IfcLabel;
INVERSE
OfPerson : SET [0:?] OF IfcPerson FOR Addresses;
OfOrganization : SET [0:?] OF IfcOrganization FOR Addresses;
WHERE
WR1 : (NOT(EXISTS(Purpose))) OR
((Purpose <> IfcAddressTypeEnum.USERDEFINED) OR
((Purpose = IfcAddressTypeEnum.USERDEFINED) AND
EXISTS(SELF.UserDefinedPurpose)));
END_ENTITY;
*/
