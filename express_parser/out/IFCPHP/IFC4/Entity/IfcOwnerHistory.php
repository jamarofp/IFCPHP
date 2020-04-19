<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcOwnerHistory extends IFC\Common{

	static public $elementName = 'IFCOWNERHISTORY';

	static public $translationFR = 'Historique des actions sur l\'objet';

	static public $params = [
		[
			'name' => 'OwningUser',
			'class' => 'Entity\IfcPersonAndOrganization',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'OwningApplication',
			'class' => 'Entity\IfcApplication',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'State',
			'class' => 'Type\IfcStateEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ChangeAction',
			'class' => 'Type\IfcChangeActionEnum',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LastModifiedDate',
			'class' => 'Type\IfcTimeStamp',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LastModifyingUser',
			'class' => 'Entity\IfcPersonAndOrganization',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LastModifyingApplication',
			'class' => 'Entity\IfcApplication',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'CreationDate',
			'class' => 'Type\IfcTimeStamp',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcOwnerHistory;
OwningUser : IfcPersonAndOrganization;
OwningApplication : IfcApplication;
State : OPTIONAL IfcStateEnum;
ChangeAction : OPTIONAL IfcChangeActionEnum;
LastModifiedDate : OPTIONAL IfcTimeStamp;
LastModifyingUser : OPTIONAL IfcPersonAndOrganization;
LastModifyingApplication : OPTIONAL IfcApplication;
CreationDate : IfcTimeStamp;
WHERE
CorrectChangeAction : (EXISTS(LastModifiedDate)) OR
(NOT(EXISTS(LastModifiedDate)) AND NOT(EXISTS(ChangeAction))) OR
(NOT(EXISTS(LastModifiedDate)) AND EXISTS(ChangeAction) AND ((ChangeAction = IfcChangeActionEnum.NOTDEFINED) OR (ChangeAction = IfcChangeActionEnum.NOCHANGE)));
END_ENTITY;
*/
