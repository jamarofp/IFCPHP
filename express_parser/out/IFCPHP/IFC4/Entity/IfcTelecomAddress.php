<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcTelecomAddress extends IfcAddress{

	static public $elementName = 'IFCTELECOMADDRESS';

	static public $translationFR = 'Adresse électronique';

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
		[
			'name' => 'TelephoneNumbers',
			'class' => 'Type\IfcLabel',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'FacsimileNumbers',
			'class' => 'Type\IfcLabel',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'PagerNumber',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ElectronicMailAddresses',
			'class' => 'Type\IfcLabel',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'WWWHomePageURL',
			'class' => 'Type\IfcURIReference',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'MessagingIDs',
			'class' => 'Type\IfcURIReference',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
	];
}
/* DEFINITION
ENTITY IfcTelecomAddress
SUBTYPE OF (IfcAddress);
TelephoneNumbers : OPTIONAL LIST [1:?] OF IfcLabel;
FacsimileNumbers : OPTIONAL LIST [1:?] OF IfcLabel;
PagerNumber : OPTIONAL IfcLabel;
ElectronicMailAddresses : OPTIONAL LIST [1:?] OF IfcLabel;
WWWHomePageURL : OPTIONAL IfcURIReference;
MessagingIDs : OPTIONAL LIST [1:?] OF IfcURIReference;
WHERE
MinimumDataProvided : EXISTS (TelephoneNumbers) OR
EXISTS (FacsimileNumbers) OR
EXISTS (PagerNumber) OR
EXISTS (ElectronicMailAddresses) OR
EXISTS (WWWHomePageURL) OR
EXISTS (MessagingIDs);
END_ENTITY;
*/
