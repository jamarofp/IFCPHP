<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcPostalAddress extends IfcAddress{

	static public $elementName = 'IFCPOSTALADDRESS';

	static public $translationFR = 'Addresse postale';

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
			'name' => 'InternalLocation',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'AddressLines',
			'class' => 'Type\IfcLabel',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'PostalBox',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Town',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Region',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PostalCode',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Country',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcPostalAddress
SUBTYPE OF (IfcAddress);
InternalLocation : OPTIONAL IfcLabel;
AddressLines : OPTIONAL LIST [1:?] OF IfcLabel;
PostalBox : OPTIONAL IfcLabel;
Town : OPTIONAL IfcLabel;
Region : OPTIONAL IfcLabel;
PostalCode : OPTIONAL IfcLabel;
Country : OPTIONAL IfcLabel;
WHERE
WR1 : EXISTS (InternalLocation) OR
EXISTS (AddressLines) OR
EXISTS (PostalBox) OR
EXISTS (PostalCode) OR
EXISTS (Town) OR
EXISTS (Region) OR
EXISTS (Country);
END_ENTITY;
*/
